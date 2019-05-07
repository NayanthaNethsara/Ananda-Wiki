<?php 
session_start();

$username = "";
$errors = array();

	//connectino
include('include/connection.php');


//if regi botton clicd


if (isset($_POST['login'])) {

	$username   = $_POST['username'];
	$password_1 = $_POST['password_1'];

	if (empty($username)) {
		array_push($errors, "User Name Is Required");

	}

	if (empty($password_1)) {
		array_push($errors, "Password Is Required");

	}


	if(count($errors) == 0) {
		$password = md5($password_1);
		$query = "SELECT * FROM users WHERE name='{$username}' AND password='{$password}'";
		$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result) == 1) {
			global $username;	

				#$query =" SELECT * FROM users WHERE username = {$username} UPDATE users SET last_login = NOW() LIMIT 1";
				#$result = mysqli_query($db, $query);

				$_SESSION['username'] = $username;
				#$_SESSION['success'] = "You are now logged in";
				header('location: about.php');
			}else{

				array_push($errors, "Invalied User Name Or Passoword");
			}

	}
 
}


 ?>
 