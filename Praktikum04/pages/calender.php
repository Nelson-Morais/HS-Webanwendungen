<?php
	//set date if available from request
	if(isset($_REQUEST['timestamp'])) {
		$date = $_REQUEST['timestamp'];
	} 
	else {
		//otherwise take the current date
		$date = time();
	}

?>

<?php
	//go a month back
	function monthBack($timestamp){
		return mktime(0, 0, 0, date("m", $timestamp) - 1, date("d", $timestamp), date("Y", $timestamp));
	}

	//go a month forward
	function monthForward($timestamp){
		return mktime(0, 0, 0, date("m", $timestamp) + 1,date("d", $timestamp), date("Y",$timestamp));
	}

	//go a year back
	function yearBack($timestamp){
		return mktime(0, 0, 0, date("m", $timestamp), date("d", $timestamp), date("Y", $timestamp) - 1);
	}

	//go a year forward
	function yearForward($timestamp){
		return mktime(0, 0, 0, date("m", $timestamp), date("d", $timestamp), date("Y",$timestamp) + 1);
	}
	
	//actual date
	function actualDate(){
		return mktime(0, 0, 0, date("m"), date("d"), date("Y"));
	}

	function createCalender($date,$headline = array('Week','Mon','Tue','Wed','Thu','Fri','Sat','Sun')) {
		$sum_days = date('t', $date);
		$LastMonthSum = date('t', mktime(0, 0, 0, (date('m', $date) - 1), 0, date('Y', $date)));
		
		//"header" (week , month and so on )
		foreach( $headline as $key => $value ) {
			echo "<div class=\"day headline\">".$value."</div>\n";
		}
		
		//day counter ( used to get week)
		$counter = 0;

		for($i = 1; $i <= $sum_days; $i++) {

			$day_name = date('D', mktime(0, 0, 0, date('m', $date), $i, date('Y', $date)));
			$day_number = date('w', mktime(0, 0, 0, date('m',$date), $i, date('Y', $date)));
			$week_number = date('W', mktime(0, 0, 0, date('m', $date), $i, date('Y', $date)));
			
			//if first position or all week days already iterated
			if ($counter % 7 == 0 || $counter == 0) {
				//weeknumber in 2 digits with 0 as first digit if no digit is set
				echo "<div class=\"day week\">".sprintf("%02d",$week_number)."</div>\n";
			}
			

			if($i == 1) {
				$s = array_search($day_name,array('Mon','Tue','Wed','Thu','Fri','Sat','Sun'));
				for($b = $s; $b > 0; $b--) {

					$x = $LastMonthSum - $b;
					echo "<div class=\"day before\">".sprintf("%02d",$x)."</div>\n";
					$counter++; //weeknumber counter
				}
			} 
			
			//if today, make it bold
			if( $i == date('d',$date) && date('m.Y',$date) == date('m.Y')) {
				echo "<div class=\"day current\">".sprintf("%02d",$i)."</div>\n";
			} else {
				echo "<div class=\"day normal\">".sprintf("%02d",$i)."</div>\n";
			}
			$counter++; //weeknumber counter
			
			//next month
			if( $i == $sum_days) {
				//get how many for next month
				$next_sum = (6 - array_search($day_name, array('Mon','Tue','Wed','Thu','Fri','Sat','Sun')));
				for($c = 1; $c <= $next_sum; $c++) {
					echo "<div class=\"day after\"> ".sprintf("%02d",$c)." </div>\n"; 
					$counter++; //weeknumber counter
				}
			}
			
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="calenderStyle.css">
	</head>
	<body>
		<div id="wrap" class="card-wrapper">
			<div class="calender">
				<div class="calenderHead">
					<a style="margin-right: 40px" href="?timestamp=<?php echo yearBack($date); ?>" class="last"><<</a> 
					<a href="?timestamp=<?php echo monthBack($date); ?>" class="last"><</a> 
					<div class="calenderTopic">
						<a href="?timestamp=<?php echo actualDate(); ?>"><?php echo date('F',$date);?> <?php echo date('Y',$date); ?></a>
					</div>
					<a href="?timestamp=<?php echo monthForward($date); ?>" class="next">></a>
					<a style="margin-left: 40px" href="?timestamp=<?php echo yearForward($date); ?>" class="next">>></a>  
				</div>
				<?php createCalender($date); ?>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>