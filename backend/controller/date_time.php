<?php
	error_reporting(0);
	date_default_timezone_set('Asia/Kolkata');
	$date = date('d');
	$month = date('M');
	$day = date('l');
	if(isset($day)){
		$day_sort = substr($day, 0, 3);
	}
	$index_date = "<big>".$date."</big><small>".$month."</small> <i class='i'>".$day_sort."</i>";

?>