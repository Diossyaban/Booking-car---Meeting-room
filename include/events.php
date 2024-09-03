<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events
		$this->events["t_meeting_book_snippet"] = true;
		$this->events["t_booking_snippet"] = true;
		$this->events["View_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["userId"] = $data["username"]; 

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_t_meeting_book_snippet(&$params)
	{
	$_SESSION['option_calendar']='meeting';
require('CALPRO/calgen.php');
	;
}
	function event_t_booking_snippet(&$params)
	{
	$_SESSION['option_calendar']='carbook';
require('CALPRO/calgen.php');
	;
}
	function event_View_snippet(&$params)
	{
	$userData = Security::getUserName();
//$rs2 = DB::Query("call sp_login('".$userData."')");
//$data2 = $rs2->fetchAssoc();
//$calender = $data2["url_calender"];
//$fullname = $data2["fullname"];
$rs2 = DB::Query("SELECT announcement_subject FROM m_announcement");
$announcements = [];
while ($row = $rs2->fetchAssoc()) {
    $announcements[] = $row['announcement_subject'];
}
$html = <<<EOT
<style>
        .body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
 
        .datetime-container {
            display: flex;
            color: #9d8426;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
 
        .ig-container {
            display: flex;
            color: #9d8426;
            justify-content: center;
            gap: 370px;
            margin-bottom: 20px;
        }
 
        .datetime {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            width: 500px;
            transition: background-color 0.3s, transform 0.3s;
        }
 
        .datetime:hover {
            background-color: silver;
            transform: scale(1.05);
        }
 
        .datetime .date,
        .datetime .time {
            margin: 10px 0;
        }
 
        .datetime .date {
            font-size: 24px;
            color: #9d8426;
            text-align: center;
            font-weight: bold;
        }
 
        .datetime .time {
            font-size: 36px;
            color: #333;
            text-align: center;
            font-weight: bold;
            transition: text-shadow 0.3s;
        }
 
        .datetime .time span {
            margin: 0 2px;
            text-align: center;
        }
 
        .datetime .time:hover {
            text-shadow: 0 0 3px rgba(192, 192, 192, 0.6), 0 0 6px rgba(192, 192, 192, 0.6), 0 0 9px rgba(192, 192, 192, 0.6), 0 0 12px rgba(192, 192, 192, 0.6);
        }
 
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 1200px;
            margin-bottom: 20px;
        }
 
        .profile-info {
            width: 100%;
        }
 
        .profile-info h2 {
            text-align: center;
            font-size: 24px;
            color: #9d8426;
            margin-bottom: 20px;
        }
 
        .profile-info table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
 
        .profile-info table,
        .profile-info th,
        .profile-info td {
            border: 1px solid #ddd;
            padding: 10px;
        }
 
        .profile-info td {
            text-align: center;
            font-size: 16px;
            color: #333;
        }
 
        .card,
        .datetime {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 650px;
            text-align: center;
        }
 
        .card {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
 
        .card img {
            border-radius: 50%;
            text-align: center;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
 
        .card-content {
            flex: 1;
            margin-left: 15px;
        }
 
        .card-content h4 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
 
        .card-content p {
            margin: 5px 0 0;
            font-size: 14px;
            text-align: center;
            color: #555;
        }
 
        .elfsight-container {
            display: flex;
            color: #9d8426;
            justify-content: center;
            gap: 120px;
            margin-bottom: 20px;
        }
 
        .elfsight-app-d62e740a-0009-46be-ba08-50b3b57919b3 {
            width: 400px;
            height: 400px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
 
        .embed-container {
            display: flex;
            justify-content: space-between;
            width: 800px;
        }
 
        .ig-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            gap: 20px;
        }
 
        .calendar-frame,
        .elfsight-app {
            width: 100%;
            height: 700px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
 
        .calendar-frame iframe,
        .elfsight-app iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
<body onload="initClock()">
    <div class="datetime-container">
        <div class="card">
            <div class="card-image">    <img src="https://via.placeholder.com/50" alt="Profile Image"></div>
            <div class="card-content">
                <h4>Welcome, $fullname!</h4>
                <p>Information Technology</p>
            </div>
        </div>
 
        <div class="datetime">
            <div class="date">
                <span id="dayname">Day</span>,
                <span id="month">Month</span>
                <span id="daynum">00</span>,
                <span id="year">Year</span>
            </div>
            <div class="time">
                <span id="hour">00</span>:
                <span id="minutes">00</span>:
                <span id="seconds">00</span>
                <span id="period">AM</span>
            </div>
        </div>
    </div>
 
<div class="container">
        <div class="profile-info">
            <h2>Announcement</h2>
            <table>
                <tbody>
                    <?php foreach (\$announcements as \$announcement): ?>
                    <tr>
                        <td><strong><?php echo \$announcement; ?></strong></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="ig-container">
        <div class="calendar-frame">
            <iframe src=$calender></iframe>
        </div>
   
        <div class="elfsight-container">
            <div class="elfsight-app-d62e740a-0009-46be-ba08-50b3b57919b3" data-elfsight-app-lazy></div>
        </div>
    </div>
 
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";
 
            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }
 
            Number.prototype.pad = function (digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }
 
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }
 
        function initClock() {
            updateClock();
            window.setInterval(updateClock, 1000);
        }
    </script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
</body>
EOT;
echo $html;
	;
}




}
?>