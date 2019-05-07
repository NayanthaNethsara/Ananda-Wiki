<?php 
session_start();

$username = "";
$email = "";
$errors = array();

	//connectino
include('include/connection.php');


//if regi botton clicd


if (isset($_POST['register'])) {

	$username   	= $_POST['username'];
	$email      	= $_POST['email'];
	$password_1		= $_POST['password_1'];
	$password_2 	= $_POST['password_2'];
	$nickname   	= $_POST['nickname'];
	$grade 			= $_POST['grade'];
	$index 			= $_POST['index'];
	$disply_picture = $_POST['dp'];
	

	if (empty($username)) {
		array_push($errors, "User Name Is Required");

	}

	if (empty($email)) {
		array_push($errors, "Email Is Required");

	}

	if (empty($password_1)) {
		array_push($errors, "Password Is Required");

	}

	if (empty($nickname)) {
		array_push($errors, "Nick Name Is Required");

	}




	if (empty($grade)) {
		array_push($errors, "Grade Is Required");

	}


	if (empty($index)) {
		array_push($errors, "Index No: Is Required");

	}

	$query = "SELECT * FROM users WHERE name='{$username}'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {
		array_push($errors, "User Name Is Already Taken");
			
		}

	$query = "SELECT * FROM users WHERE email='{$email}'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {

		array_push($errors, "Email Is Already Taken");
			
				}


	$query = "SELECT * FROM users WHERE index_no='{$index}'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) == 1) {

		array_push($errors, "Already You Have Account");
			
				}


	if (empty($password_2)) {
		array_push($errors, "Confirm Password Required");

	}

	if ($password_2 != $password_1) {
		array_push($errors, "Password Does Not Match");

	}

	if(count($errors) == 0) {
		$password = md5($password_1);
		$sql =  "INSERT INTO users (name, password, grade, index_no, nickname, email, dp) VALUES ('{$username}', '{$password}', '{$grade}', '{$index}', '{$nickname}', '{$email}', '{$disply_picture}')";
		$res = mysqli_query($db, $sql);

	}
}

		

 ?>