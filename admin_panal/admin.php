<?php
session_start();

 if ($_SESSION['login'] == "Loged" ) {
	


}else {
	 header('location:admin_login.php');

} ?><!DOCTYPE html>

<html>

<head>

	<title>Admin</title>

	<style type="text/css">

		body{
			background-size: auto;
		}
		#select{

			margin-top: 200px;
			height: 80px;
			width: 500px;
			font-size: 35px;
			text-indent: 20px;
			background-color: rgba(0,0,0,0.001);
			color: black;
			font-family: "arial";
			border: none;
			fill: none;
			background:none;

		}
		#option{

			background-color: rgba(0,0,0,0.001);
			fill: none;

		}



	</style>


</head>

<body style="background: url(../wallpapers/anonymus-hacker-2048x1152.jpg); background-size: 100%;">

	<header>		<form method="post"> <input type="submit" name="logout" value="Logout"></form>
		<?php if (isset($_POST['logout'])) {
			$_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();
              //  die();
            header('location: ../index.php');
		} ?>
	</header>

<center><div id="1">
<form method="post" >
	<select id="select" name="option">

		<option id="option"> </option>
		<option id="option">Update</option>
		<option id="option">New Society</option>
		<option id="option">New Sports</option>
		<option id="option">Insert Details</option>

	</select>
	<br>
	<br>
	<br>

	<input type="Submit" name="select" value="Submit">

</form>
</div></center>

</body>

</html>
<?php

if (isset($_POST['select'])) {



	if ($_POST['option'] == "Update") {

		header('location:admin_update.php');
	}

	if ($_POST['option'] == "New Society") {

		header('location:admin_new_society.php');
	}

	if ($_POST['option'] == "Insert Details") {

		header('location:admin_details_society.php');
	}

	if ($_POST['option'] == "New Sports") {

		header('location:admin_new_sport.php');
	}

	if ($_POST['option'] == "Privileges") {

		header('location:privileges.php');
	}

}




 ?>
