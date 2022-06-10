<head>
    <title>Timetable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="PANEL">
    <div class="ACT">
        <div class="ADD-DIV">
            <h1>Panel: </h1>
            <label>Select day: </label>
            <select class="DAY-SELECT">
                <option selected disabled>Day</option>
            </select>

            <label>Activity:</label>
            <select class="SACT">
            <option value="new" selected>New</option>    
            </select>
            
            <label>Text: </label>
            <input type="text" class="TEXT" placeholder="Text" required>

            <div style="width:100%;display: flex;">
                <div style="display:flex;width: 49%;flex-direction: column;">
                    <label>Start:</label>
                    <input type="time" class="TSTART" style="width:100%" required>
                </div>
                <div style="width: 49%;display:flex;flex-direction: column;">
                    <label>End:</label>
                    <input type="time" class="TEND" style="width:100%" required>
                </div>
            </div>

            <label>Background-Color:</label>
            <div class="COLOR-DIV" style="width:100%;">
                <input type="color" class="COLOR1" style="width: 49%;">
                <input type="color" class="COLOR2" style="width: 49%;">
            </div>
            <a class="toggle">Show more</a>
            <div class="ADD-TEXT-DIV" style="display: none;">
                <label>TOP RIGHT TEXT:</label>
                <input type="text" id='1' class="TR">
                <label>TOP LEFT TEXT:</label>
                <input type="text" id='1' class="TL">
                <label>BOTTOM RIGHT TEXT:</label>
                <input type="text" id='1' class="BR">
                <label>BOTTOM LEFT TEXT:</label>
                <input type="text" id='1' class="BL">
            </div>
            <div stlye="display:flex;">
                <button class="SUBMIT">ADD</button>
                <button style="display:none" class="REMOVE">REMOVE</button>
            </div>
            <input type="text" class="NOTEINP" placeholder="Note">
            <button class="DOWNLOAD">DOWNLOAD</button>
        </div>
    </div>
</div>
<div class="timetable">
    <div class="DAYS">
        <div class="DAY">TT</div>
        <div id='DAY' data-HDAY='Monday' class="DAY">Mon</div>
        <div id='DAY' data-HDAY='Tuesday' class="DAY">Tues</div>
        <div id='DAY' data-HDAY='Wednesday' class="DAY">Wed</div>
        <div id='DAY' data-HDAY='Thursday' class="DAY">Thu</div>
        <div id='DAY' data-HDAY='Friday' class="DAY">Fri</div>
        <div id='DAY' data-HDAY='Saturday' class="DAY">Sat</div>
        <div id='DAY' data-HDAY='Sunday' class="DAY">Sun</div>
    </div>
    <div class="CONTENT">
        <div class="HEAD">
            <div class="HEAD-HOUR">
                <a class="NUMB">1</a>
                <a class="HEAD-HOUR-TIME"><span>8</span> - 9</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">2</a>
                <a class="HEAD-HOUR-TIME"><span>9</span> - 10</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">3</a>
                <a class="HEAD-HOUR-TIME"><span>10</span> - 11</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">4</a>
                <a class="HEAD-HOUR-TIME"><span>11</span> - 12</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">5</a>
                <a class="HEAD-HOUR-TIME"><span>12</span> - 13</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">6</a>
                <a class="HEAD-HOUR-TIME"><span>13</span> - 14</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">7</a>
                <a class="HEAD-HOUR-TIME"><span>14</span> - 15</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">8</a>
                <a class="HEAD-HOUR-TIME"><span>15</span> - 16</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">9</a>
                <a class="HEAD-HOUR-TIME"><span>16</span> - 17</a>
            </div>
            <div class="HEAD-HOUR">
                <a class="NUMB">10</a>
                <a class="HEAD-HOUR-TIME"><span>17</span> - 18</a>
            </div>
        </div>
        <div class="CONTAINER">
            <div class="ADDS">
                <div class="ADDS-ROW" data-day="Monday">
                    <div data-text="Maths" data-start="08:00" data-end="09:00" class="ADDS-ROW-HOUR" style="transform: translateX(0px);background:linear-gradient(to right, #36D1DC, #5B86E5);width:89px;">
                        <div class="ADDS-ROW-HOUR-NAME">Maths</div>
                        <div data-type="TL" class="ADDS-ROW-HOUR-DETAILS TOP-LEFT">1</div>
                        <div data-type="TR" class="ADDS-ROW-HOUR-DETAILS TOP-RIGHT">2</div>
                        <div data-type="BR" class="ADDS-ROW-HOUR-DETAILS BOTTOM-RIGHT">3</div>
                        <div data-type="BL" class="ADDS-ROW-HOUR-DETAILS BOTTOM-LEFT">4</div>
                    </div>
                    <div data-text="Physique" data-start="10:00" data-end="12:00" class="ADDS-ROW-HOUR" style="transform: translateX(180px);background:linear-gradient(to right, #00b09b, #96c93d);width:180px">
                        <div class="ADDS-ROW-HOUR-NAME">Physique</div>
                        <div data-type="TL" class="ADDS-ROW-HOUR-DETAILS TOP-LEFT">1</div>
                        <div data-type="TR" class="ADDS-ROW-HOUR-DETAILS TOP-RIGHT">2</div>
                        <div data-type="BR" class="ADDS-ROW-HOUR-DETAILS BOTTOM-RIGHT">3</div>
                        <div data-type="BL" class="ADDS-ROW-HOUR-DETAILS BOTTOM-LEFT">4</div>
                    </div>
                </div>
                <div class="ADDS-ROW" data-day="Tuesday">
                    <div data-text="Fitness" data-start="08:00" data-end="09:00" class="ADDS-ROW-HOUR" style="transform: translateX(0px);background:linear-gradient(to right, #834d9b, #d04ed6);width:89px;">
                        <div  class="ADDS-ROW-HOUR-NAME">Fitness</div>
                        <div data-type="TL" class="ADDS-ROW-HOUR-DETAILS TOP-LEFT">1</div>
                        <div data-type="TR" class="ADDS-ROW-HOUR-DETAILS TOP-RIGHT">2</div>
                        <div data-type="BR" class="ADDS-ROW-HOUR-DETAILS BOTTOM-RIGHT">3</div>
                        <div data-type="BL" class="ADDS-ROW-HOUR-DETAILS BOTTOM-LEFT">4</div>
                    </div>
                </div>
                <div class="ADDS-ROW" data-day="Wednesday"></div>
                <div class="ADDS-ROW" data-day="Thursday"></div>
                <div class="ADDS-ROW" data-day="Friday"></div>
                <div class="ADDS-ROW" data-day="Saturday"></div>
                <div class="ADDS-ROW" data-day="Sunday"></div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
            <div class="HOUR-ROW">
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
                <div class="HOUR">
                    <div class="HALF"></div>
                    <div class="HALF"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>