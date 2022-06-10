function componentToHex(c) {
  var hex = c.toString(16);
  return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
  return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}

let x;

style = getComputedStyle(document.body)
height = parseInt(style.getPropertyValue('--column-height'));
width = parseInt(style.getPropertyValue('--column-width'));

addBTN = document.querySelector('.SUBMIT');
removeBTN = document.querySelector('.REMOVE');
downloadBTN = document.querySelector('.DOWNLOAD');

textInput = document.querySelector('.TEXT');
color1inp = document.querySelector('.COLOR1')
color2inp = document.querySelector('.COLOR2')
Tstartinp = document.querySelector('.TSTART');
Tendinp = document.querySelector('.TEND');
TR = document.querySelector('.TR');
TL = document.querySelector('.TL');
BR = document.querySelector('.BR');
BL = document.querySelector('.BL');
days = document.querySelectorAll('#DAY');

ActivitySelect = document.querySelector('.SACT');


inputs = document.querySelectorAll('input:not(.NOTEINP)');
inputs.forEach(y => {
	y.addEventListener("input", function() {
		Activity = ActivitySelect.options[ActivitySelect.selectedIndex].text;
		if(Activity == 'New') {return;}
		ACT = document.querySelector('[data-text="' + Activity + '"]');
		if(y.className == 'TEXT') {
			ACT.querySelector('.ADDS-ROW-HOUR-NAME').innerHTML = y.value;
			ACT.dataset.text = y.value;
			op = document.querySelector('option[value="' + Activity + '"]')
			op.value = y.value;
			op.innerHTML = y.value;
		}
		else if(y.id == '1') {
			classN = y.className;
			ACT.querySelector('[data-type="' + classN + '"]').innerHTML = y.value;
		}
		else if(y.type == 'color') {
			if(y.className == 'COLOR1') {
				rgb1 = y.value;
				rgb2 = ACT.style.background.split(', ')[4] + ', ' + ACT.style.background.split(', ')[5] + ' ,' + ACT.style.background.split(', ')[6];
				Bgstyle = 'linear-gradient(to right, ' + rgb1 + ', ' + rgb2;
				ACT.style.background = Bgstyle;
			} else if(y.className == 'COLOR2') {
				rgb1 = ACT.style.background.split(', ')[1] + ', ' + ACT.style.background.split(', ')[2] + ', ' + ACT.style.background.split(', ')[3];
				rgb2 = y.value;
				Bgstyle = 'linear-gradient(to right, ' + rgb1 + ', ' + rgb2;
				ACT.style.background = Bgstyle;
			}
		}
		else if(y.type == 'time') {
			start = document.querySelector('.TSTART').value;
			end = document.querySelector('.TEND').value;
			START_H = parseInt(start.split(':')[0]);
			START_M = parseInt(start.split(':')[1]);
			END_H = parseInt(end.split(':')[0]);
			END_M = parseInt(end.split(':')[1]);
			firstT = parseInt(document.querySelectorAll('.HEAD-HOUR')[0].querySelector('.HEAD-HOUR-TIME').querySelector('span').innerHTML.split('-'));
			lastT = parseInt(document.querySelectorAll('.HEAD-HOUR')[document.querySelectorAll('.HEAD-HOUR').length-1].querySelector('.HEAD-HOUR-TIME').innerHTML.split('-')[1]);
			max = lastT-firstT;
			if(y.className == 'TSTART') {
				time(y);
			} else if(y.className == 'TEND') {
				time(y);
			}
		}
	});
});

function time(y) {
	if(firstT>START_H) {alert('no time'); return;}
	if(lastT<END_H) {alert('no time'); return;}
				timel = document.querySelectorAll('.HEAD-HOUR-TIME');
				for(let i=0;i<timel.length;i++) {
					if(parseInt(timel[i].querySelector('span').innerHTML) == START_H) {
						x=parseInt(i);
					}
				}
				ntransform = x*width+(width/60)*START_M;
				ACT.style.transform = 'translateX(' + ntransform + 'px)';
				ACT.dataset.start = start;
				ACT.dataset.end = end;
				var diff = moment.utc(moment(end, "HH:mm").diff(moment(start, "HH:mm"))).format("HH:mm");
				if(diff.search(':') !=-1) {
					diffH = parseInt(diff.split(':')[0]);
					diffM = parseInt(diff.split(':')[1]);
				}
				else {
					diffH = parseInt(0);
					diffM = parseInt(diff);
				}
				if(diffH>max) {alert('over'); return;}
				ACT.style.width = diffH*parseInt(width)+(diffM*width/60) + 'px';
}

daySelect = document.querySelector('.DAY-SELECT');
days.forEach(y => {
	option = document.createElement('option');
	option.value = y.innerHTML;
	option.innerHTML = y.getAttribute('data-hday');
	daySelect.appendChild(option);
});


daySelect.addEventListener("input", function() {
	inputs.forEach(x => {
		x.value = '';
	});
	Activities();
	removeBTN.style.display = 'none';
	addBTN.style.display = '';
});

function Activities() {
	ActivitySelect.innerHTML = '';
	day = daySelect.options[daySelect.selectedIndex].text;
	dayRow = document.querySelector('div[data-day="'+day+'"]');
	option = document.createElement('option');
	option.innerHTML = 'New';
	option.value = 'New';
	ActivitySelect.appendChild(option);
	if(dayRow.childNodes.length > 0) {
		for(let i=0;i<dayRow.childNodes.length;i++) {
			if(dayRow.childNodes[i].className == 'ADDS-ROW-HOUR') {
				console.log(dayRow.childNodes[i].querySelector('.ADDS-ROW-HOUR-NAME').innerHTML);
				option = document.createElement('option');
				option.innerHTML = dayRow.childNodes[i].querySelector('.ADDS-ROW-HOUR-NAME').innerHTML;
				option.value = dayRow.childNodes[i].querySelector('.ADDS-ROW-HOUR-NAME').innerHTML;
				ActivitySelect.appendChild(option);
			}
		}
	}
}

ActivitySelect.addEventListener("input", function() {
	Activity = ActivitySelect.options[ActivitySelect.selectedIndex].text;
	console.log(Activity);
	if(Activity == 'New') {
		inputs.forEach(x => {
			x.value = '';
		});
		removeBTN.style.display = 'none';
		addBTN.style.display = '';
	}
	else {
		for(let i=0;i<document.querySelectorAll('.ADDS-ROW-HOUR-NAME').length;i++) {
			element = document.querySelectorAll('.ADDS-ROW-HOUR-NAME')[i];
			if(element.innerHTML == Activity) {
				text = element.innerHTML;
				textInput.value = text;
				r = parseInt(element.parentNode.style.background.split('(')[2].split(')')[0].split(',')[0].replace(/\s/g, ''));
				g = parseInt(element.parentNode.style.background.split('(')[2].split(')')[0].split(',')[1].replace(/\s/g, ''));
				b = parseInt(element.parentNode.style.background.split('(')[2].split(')')[0].split(',')[2].replace(/\s/g, ''));
				color1 = rgbToHex(r, g, b);
				r1 = parseInt(element.parentNode.style.background.split('(')[3].split(')')[0].split(',')[0].replace(/\s/g, ''));
				g1 = parseInt(element.parentNode.style.background.split('(')[3].split(')')[0].split(',')[1].replace(/\s/g, ''));
				b1 = parseInt(element.parentNode.style.background.split('(')[3].split(')')[0].split(',')[2].replace(/\s/g, ''));
				color2 = rgbToHex(r1, g1, b1);
				color1inp.value = color1;
				color2inp.value = color2;

				Tstart = element.parentNode.getAttribute('data-start');
				Tend = element.parentNode.getAttribute('data-end');
				Tstartinp.value = Tstart;
				Tendinp.value = Tend;
				TR.value = element.parentNode.querySelector('.TOP-RIGHT').innerHTML;
				TL.value = element.parentNode.querySelector('.TOP-LEFT').innerHTML;
				BR.value = element.parentNode.querySelector('.BOTTOM-RIGHT').innerHTML;
				BL.value = element.parentNode.querySelector('.BOTTOM-LEFT').innerHTML;
			}
		}
		removeBTN.style.display = '';
		addBTN.style.display = 'none';
	}
});


let toggleBTN = document.querySelector('.toggle');
let toggleDIV = document.querySelector('.ADD-TEXT-DIV');
toggleBTN.addEventListener("click", function() {
	if(toggleBTN.innerHTML == 'Show more') {
		toggleDIV.style.display = '';
		toggleBTN.innerHTML = 'Show less';
	} else {
		toggleDIV.style.display = 'none';
		toggleBTN.innerHTML = 'Show more';
	}
});
removeBTN.addEventListener("click", function() {
	inputs.forEach(x => {
		x.value = '';
	});
	Activity = ActivitySelect.options[ActivitySelect.selectedIndex].text;
	ACT = document.querySelector('[data-text="' + Activity + '"]');
	ACT.parentNode.removeChild(ACT);
	Activities();
	removeBTN.style.display = 'none';
	addBTN.style.display = '';
});

addBTN.addEventListener("click", function() {
	day = daySelect.options[daySelect.selectedIndex].text;
	if(day == 'Day' || document.querySelector('.TEXT').value == '' || document.querySelector('.TSTART').value == '' || document.querySelector('.TEND').value == '') {
		alert('Something is missing!');
		return;
	}
	parent = document.querySelector('.ADDS-ROW[data-day="' + day + '"]');

	timel = document.querySelectorAll('.HEAD-HOUR-TIME');

	start = document.querySelector('.TSTART').value;
	end = document.querySelector('.TEND').value;

	END_H = parseInt(end.split(':')[0]);

	START_H = parseInt(start.split(':')[0]);
	START_M = parseInt(start.split(':')[1]);
	firstT = parseInt(document.querySelectorAll('.HEAD-HOUR')[0].querySelector('.HEAD-HOUR-TIME').querySelector('span').innerHTML.split('-'));
	lastT = parseInt(document.querySelectorAll('.HEAD-HOUR')[document.querySelectorAll('.HEAD-HOUR').length-1].querySelector('.HEAD-HOUR-TIME').innerHTML.split('-')[1]);
	if(lastT<END_H) {alert('no time'); return;}

	if(firstT>START_H) {alert('no time'); return;}
	max = lastT-firstT;
	var diff = moment.utc(moment(end, "HH:mm").diff(moment(start, "HH:mm"))).format("HH:mm");
	if(diff.search(':') !=-1) {
		diffH = parseInt(diff.split(':')[0]);
		diffM = parseInt(diff.split(':')[1]);
	}
	else {
		diffH = parseInt(0);
		diffM = parseInt(diff);
	}
	if(diffH>max) {alert('over'); return;}
	newActivity = document.createElement('div');
	newActivity.dataset.text = document.querySelector('.TEXT').value;
	newActivity.dataset.start = start;
	newActivity.dataset.end = end;
	newActivity.className = 'ADDS-ROW-HOUR';
	newActivity.style.background = 'linear-gradient(to right, ' + document.querySelector('.COLOR1').value +  ', ' + document.querySelector('.COLOR2').value + ')';

	for(let i=0;i<timel.length;i++) {
		if(parseInt(timel[i].querySelector('span').innerHTML) == START_H) {
			x=parseInt(i);
		}
	}

	ntransform = x*width+(width/60)*START_M;
	newActivity.style.transform = 'translateX(' + ntransform + 'px)';
	console.log(newActivity, name);
	newActivity.style.width = diffH*parseInt(width)+(diffM*width/60)-1 + 'px';
	parent.appendChild(newActivity);
	newActivity.innerHTML += '<div class="ADDS-ROW-HOUR-NAME">' + document.querySelector('.TEXT').value + '</div>';
	newActivity.innerHTML += '<div data-type="TL" class="ADDS-ROW-HOUR-DETAILS TOP-LEFT">' + document.querySelector('.TL').value + '</div>'
	newActivity.innerHTML += '<div data-type="TR" class="ADDS-ROW-HOUR-DETAILS TOP-RIGHT">' + document.querySelector('.TR').value + '</div>'
	newActivity.innerHTML += '<div data-type="BR" class="ADDS-ROW-HOUR-DETAILS BOTTOM-RIGHT">' + document.querySelector('.BR').value + '</div>'
	newActivity.innerHTML += '<div data-type="BL" class="ADDS-ROW-HOUR-DETAILS BOTTOM-LEFT">' + document.querySelector('.BL').value + '</div>'
	Activities();
	newSelected = document.querySelector('option[value="' + document.querySelector('.TEXT').value + '"]');
	newSelected.selected = true;
	removeBTN.style.display = '';
	addBTN.style.display = 'none';
});

downloadBTN.addEventListener("click", function() {
	note = document.querySelector('.NOTEINP').value;
	if(!document.querySelector('.NOTE')) {
		noteV = document.createElement('span');
		noteV.className = 'NOTE';
		noteV.innerHTML = 'Note: ' + note;
		document.body.appendChild(noteV);
	}
	else {
		document.querySelector('.NOTE').innerHTML = 'Note: ' + note;
	}
	window.print();
});