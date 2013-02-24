<?php
//Database connection details
$host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "bokul_cms";

//make connection with mysql and select the database
$mysql_connect = mysql_connect($host, $mysql_user, $mysql_password);
$db_select = mysql_select_db($mysql_db);

//check if time is set in the URL
if(isset($_GET['time']))
	$time = $_GET['time'];
else
	$time = time();


$today = date("Y/n/j", time());

$current_month = date("n", $time);

$current_year = date("Y", $time);

$current_month_text = date("F Y", $time);

$total_days_of_current_month = date("t", $time);

$events = array();

//query the database for events between the first date of the month and the last of date of month
$result = mysql_query("SELECT DATE_FORMAT(eventDate,'%d') AS day,eventContent,eventTitle FROM eventcal WHERE eventDate BETWEEN  '$current_year/$current_month/01' AND '$current_year/$current_month/$total_days_of_current_month'");

while($row_event = mysql_fetch_object($result))
{
	//loading the $events array with evenTitle and eventContent inside the <span> and <li>. We will add then inside <ul> in the calender
	$events[intval($row_event->day)] .= '<li><span class="title">'.stripslashes($row_event->eventTitle).'</span><span class="desc">'.stripslashes($row_event->eventContent).'</span></li>';
}							

$first_day_of_month = mktime(0,0,0,$current_month,1,$current_year);

//geting Numeric representation of the day of the week for first day of the month. 0 (for Sunday) through 6 (for Saturday).
$first_w_of_month = date("w", $first_day_of_month);

//how many rows will be in the calendar to show the dates
$total_rows = ceil(($total_days_of_current_month + $first_w_of_month)/7);

//trick to show empty cell in the first row if the month doesn't start from Sunday
$day = -$first_w_of_month;


$next_month = mktime(0,0,0,$current_month+1,1,$current_year);
$next_month_text = date("F \'y", $next_month);

$previous_month = mktime(0,0,0,$current_month-1,1,$current_year);
$previous_month_text = date("F \'y", $previous_month);

$next_year = mktime(0,0,0,$current_month,1,$current_year+1);
$next_year_text = date("F \'y", $next_year);

$previous_year = mktime(0,0,0,$current_month,1,$current_year-1);
$previous_year_text = date("F \'y", $previous_year);
?>

<html>
<head>
<title><?=$current_month_text?></title>
<link rel="stylesheet" href="css/master.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script src="js/coda.js" type="text/javascript"> </script>
</head>
<body>
	<h2><?=$current_month_text?></h2>
	<table cellspacing="0">
		<thead>
		<tr>
			<th>Sun</th>
			<th>Mon</th>
			<th>Tue</th>
			<th>Wed</th>
			<th>Thu</th>
			<th>Fri</th>
			<th>Sat</th>
		</tr>
		</thead>
		<tr>
			<?php
			for($i=0; $i< $total_rows; $i++)
			{
				for($j=0; $j<7;$j++)
				{
					$day++;					
					
					if($day>0 && $day<=$total_days_of_current_month)
					{
						//YYYY-MM-DD date format
						$date_form = "$current_year/$current_month/$day";
						
						echo '<td';
						
						//check if the date is today
						if($date_form == $today)
						{
							echo ' class="today"';
						}
						
						//check if any event stored for the date
						if(array_key_exists($day,$events))
						{
							//adding the date_has_event class to the <td> and close it
							echo ' class="date_has_event"><a href="details.php?date='.$date_form.'"> '.$day;
							
							//adding the eventTitle and eventContent wrapped inside <span> & <li> to <ul>
							echo '<div class="events"><ul>'.$events[$day].'</ul></div></a>';
							//echo '</a>';
						}
						else 
						{
							//if there is not event on that date then just close the <td> tag
							echo '> '.$day;
						}
						
						echo "</td>";
					}
					else 
					{
						//showing empty cells in the first and last row
						echo '<td class="padding">&nbsp;</td>';
					}
				}
				echo "</tr><tr>";
			}
			
			?>
		</tr>
		<tfoot>		
			<th>
				<a href="<?=$_SERVER['PHP_SELF']?>?time=<?=$previous_year?>" title="<?=$previous_year_text?>">&laquo;&laquo;</a>
			</th>
			<th>
				<a href="<?=$_SERVER['PHP_SELF']?>?time=<?=$previous_month?>" title="<?=$previous_month_text?>">&laquo;</a>
			</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>
				<a href="<?=$_SERVER['PHP_SELF']?>?time=<?=$next_month?>" title="<?=$next_month_text?>">&raquo;</a>
			</th>
			<th>
				<a href="<?=$_SERVER['PHP_SELF']?>?time=<?=$next_year?>" title="<?=$next_year_text?>">&raquo;&raquo;</a>
			</th>		
		</tfoot>
	</table>
</body>
</html>
