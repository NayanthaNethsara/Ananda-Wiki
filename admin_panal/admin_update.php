<?php
session_start();

 if ($_SESSION['login'] == "Loged" ) {
	


}else {
	 header('location:admin_login.php');

} ?><?php require('include/connection.php'); ?>


<?php require 'include/admin_server.php'; ?>



<!DOCTYPE html>


<html>


<head>

	<!--link rel="stylesheet" type="text/css" href="assets/admin/stylesheet.css"-->
	<style type="text/css">

		body{

			background-color: rgba(0,0,0,0.8);

		}

		#update{

			border-radius: 10px;
			padding: 50px;
			color: white;
		}

		#input{

			background-color: rgba(200,200,200, 0.3);
			border-style: none;
			height: 20px;
			width: 200px;
			padding: 5px;

		}

		#event{

			background-color: rgba(200,200,200, 0.3);
			border-style: none;
			height: 380px;
			width: 70%;
			padding: 5px;
		}



	</style>

	<title>Admin</title>


</head>


<body>
	<header>		<form method="post"> <input type="submit" name="logout" value="logout"></form>
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


<center><div id="update" >

	<form method="post">


		<label id="lable1">Society Name</label>			<input type="text" name="name" id="input">				<br><br><br>			


		<label id="lable1">Event</label><br>			<textarea name="event" id="event" class="text"></textarea>			<br><br><br>	


		<label id="lable1">Viwes</label>			<input type="number" name="viwes" id="input">			<br>
		<br>
		<label id="lable1">Year</label>			<input type="number" name="year" id="input">			<br>
		<br>
		<label id="lable1">Month</label>			<input type="number" name="month" id="input">			<br>
		<br>
		<label id="lable1">Day</label>			<input type="number" name="day" id="input">			<br>
		<br>

		<input type="submit" name="input" id="button">


	</form>

</div></center>



</body>


</html>