<?php 
include '../include/connection.php';
session_start();

 if ($_SESSION['login'] == "Loged" ) {
    


}else {
    else {
	 header('location:admin_login.php');

}

}

if (isset($_POST['submit'])) {
    
    $sname = $_SESSION['societyname'];
    


    $name       =   $_FILES['file']['name'];
    $extension = strtolower(substr($name,strpos($name,'.')+ 1)); 
    $size       =   $_FILES['file']['size'];
    $type       =   $_FILES['file']['type'];
    $tmp_name   =   $_FILES['file']['tmp_name'];



if (isset($name)) {
    if (!empty($name)) {
        global $sname;
        //global $error;
        if ($extension=="jpg" or $extension=="png" or $extension=="jpge") {
            # code...
        

            $location ='../../img/';
            $picname = $sname."about2.".$extension;

            if(move_uploaded_file($tmp_name,$location.$picname)){
                global $extension;
                        $picture =  "img/".$sname."about2.".$extension;  

                        $query = "UPDATE images SET about_img1 = '{$picture}' WHERE sname ='{$sname}'";
                        $result = mysqli_query($db, $query);
                        if ($result == 1) {
                            # code...
                        
                        header('location:admin11.php');
                        }   
                    }else{
                $error = 1;
            }
        }

}
}}
 ?><!DOCTYPE html>
<html>
<head>
	<title>Admin images</title>
</head>
<body><header>		<form method="post"> <input type="submit" name="logout" value="logout"></form>
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

<form method="POST" enctype="multipart/form-data" >

<label>
about</label>

<input type="file" name="file">
<label>

<br>


<input type="submit" name="submit">


</form>

</body>
</html>