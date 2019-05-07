<?php
session_start();

 if ($_SESSION['login'] == "Loged" ) {
	


}else {
	 header('location:admin_login.php');

} ?><!DOCTYPE html>
<html>
<head>
	<title>Add New Society</title>

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
<?php 




include('include/connection.php');

if (isset($_POST['submit'])) {
	
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	//$catagory = $_POST['catagory'];
	$views = $_POST['views'];


	$name 		=	$_FILES['file']['name'];
	$extension = strtolower(substr($name,strpos($name,'.')+ 1)); 
	$size  		=	$_FILES['file']['size'];
	$type  		=	$_FILES['file']['type'];
	$tmp_name  	=	$_FILES['file']['tmp_name'];



if (isset($name)) {
	if (!empty($name)) {
		global $sname;
		//global $error;
		if ($extension=="jpg" or $extension=="png" or $extension=="jpge") {
			# code...
		

			$location ='../tumbnails/';
			$picname = $sname.".".$extension;

			if(move_uploaded_file($tmp_name,$location.$picname)){

			}else{
				$error = 1;
			}
		}

}
}














 	if (!empty($sname &&/* $catagory &&*/ $fname && $views)) {
 		global $error;
 		if($error < 1){

 			$picture = "tumbnails/".$sname.".".$extension;

 		$query = "INSERT INTO societies(sname, fname, views,  picture, catagory) VALUES ('{$sname}','{$fname}','{$views}', '{$picture}', 'society')";
 		$result = mysqli_query($db, $query);

 		if ($result == 1) {
 			global $sname;

 				$query = "INSERT INTO details(sname) VALUES ('{$sname}')";
 				$result2 = mysqli_query($db, $query);

 				if ($result2 == 1) {

 					$query = "INSERT INTO images(sname) VALUES ('{$sname}')";
 				$result3 = mysqli_query($db, $query);

 				if ($result3 == 1) {
 					# code...
 				
 				header('location:admin.php');
 			}
 			}

 		}
 	}
 	}
}



?>




<form method="POST" enctype="multipart/form-data" >
		

		<label>Society Name (SHORT FORM)</label> <input type="text" name="sname" maxlength="8">
		<br>
		<br>
		<label>Full Name</label> <input type="text" name="fname">
		<br>
		<br>
		<label>Start Views</label> <input type="number" name="views" maxlength="5">
		<br>
		<br>
		<label>Pictuer (10 : 16) (Height: Width)</label> <input type="file" name="file">
		<br>
		<br>
		<!--select name="catagory">
			<option>unpopular</option>
			<option>popular</option>
			
		</select-->

		<input type="submit" name="submit" value="submit">

</form>

</body>
</html>