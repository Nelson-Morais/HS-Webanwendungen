<?php
	//get row from get
	$row = $_GET['row'];
	//open csv
	$handle = fopen("csv/username.csv", "r");
	//temp csv
	$temp_handle = fopen("csv/temp_handle.csv","a");
	//for all lines
	for ($i = 0; ($data = fgetcsv($handle, 1000)) !== FALSE; $i++) {
		//if its not the row to delete
		if ($i != $row) {
			//add row to the csv
			fputcsv($temp_handle, $data);
		}
	}
	fclose($handle);
	fclose($temp_handle);
	//rename new csv and override the old one
	rename('csv/temp_handle.csv','csv/username.csv');
	//redirect to table
	$table = '<script type="text/javascript">window.open("table.php","_self")</script>';
	echo $table;
?>