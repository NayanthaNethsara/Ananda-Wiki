<!DOCTYPE html>
<html>
<head>
	<title>Admin_login</title>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body>



	<form method="post">
	  <span id="sprypassword1">
		<input type="password" name="admin" id="password">
	  <span class="passwordRequiredMsg">A value is required.</span></span>
		<br>
        
        
	  <span id="sprypassword1">
		<input type="password" name="password" id="password">
	  <span class="passwordRequiredMsg">A value is required.</span></span>
		<br>
        
        
        
      <input type="submit" name="submit">
	</form>

	<?php

//467edcc1dc4f74d0034eb355a069f5b5



	//afc988d711f42892e9fe674be50e7171

/*$password = "467edcc1dc4f74d0034eb355a069f5b5";


$password =md5($password);

echo $password;*/

	include 'include/connection.php';
	session_start(); 
	if (isset($_POST['submit'])){
				if (( md5(md5($_POST['admin'])) == "4a53f5003188660016d439ea46cf22e1")) {

					if (( md5( md5($_POST['password'])) == "71af6dc3f5dd44964b94b8cf393ae89d")) {


							$SERVER_SOFTWARE= $_SERVER['SERVER_SOFTWARE'] ;
							$SERVER_NAME =$_SERVER['SERVER_NAME'];
							$SERVER_ADDR =$_SERVER['SERVER_ADDR'];
							$REMOTE_ADDR =$_SERVER['REMOTE_ADDR'];
							$GATEWAY_INTERFACE =$_SERVER['GATEWAY_INTERFACE'];
							$REQUEST_METHOD=$_SERVER['REQUEST_METHOD'];
		

							$query=	"INSERT INTO `login_information`(REQUEST_TIME ,SERVER_NAME, SERVER_ADDR, REMOTE_ADDR, GATEWAY_INTERFACE, REQUEST_METHOD, SERVER_SOFTWARE) VALUES (NOW(), '{$SERVER_NAME}', '{$SERVER_ADDR}', '{$REMOTE_ADDR}', '{$GATEWAY_INTERFACE}', '{$REQUEST_METHOD}', '{$SERVER_SOFTWARE}')";
							$result = mysqli_query($db, $query);	


						$_SESSION['login'] = "Loged";
						header('location:admin.php');
					}
				}


	} ?>

<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>