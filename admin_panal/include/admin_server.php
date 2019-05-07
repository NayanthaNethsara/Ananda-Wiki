

<?php

//session_start();

$errors = array();

 if (isset($_POST['input'])) {
 		
 		$name  = ($_POST['name']);
 		$event = ($_POST['event']);
 		$views = ($_POST['viwes']);
 		$year = ($_POST['year']);
 		$month = ($_POST['month']);
 		$day = ($_POST['day']);
 		$date = "On"." ".$day. ".".$month.".".$year;


if (empty($name)) {
		array_push($errors, "Society Name Is Required");

	}

	if (empty($event)) {
		array_push($errors, "Event Is Required");

	}

	/*if (empty($viwes)) {
		array_push($errors, "Views Is Required Or Enter 0");

	}*/

if(count($errors) < 1) {

		$sql =  "INSERT INTO events (name, event, views, date, day, month , year) VALUES ('{$name}', '{$event}', '{$views}', '{$date}','{$day}','{$month}','{$year}')";
		$res = mysqli_query($db, $sql);


	}

 }






























?>