<?php
session_start();

 if ($_SESSION['login'] == "Loged" ) {
	


}else {

 header('location:admin_login.php');

} ?>



<?php 

include('include/connection.php');

if (isset($_POST['submit'])) {


	$sname = $_POST['sname'];
	$started   = $_POST['started'];
	$objective = $_POST['objective'];
	$president   = $_POST['president'];
	$vice_president   = $_POST['vice_president'];
	$secretary   = $_POST['secretary'];
	$treasurer   = $_POST['treasurer'];
	$organizer   = $_POST['organizer'];
	$coodinetor   = $_POST['coodinetor'];
	$teacher1   = $_POST['teacher1'];
	$teacher2   = $_POST['teacher2'];
	$teacher3   = $_POST['teacher3'];
	$teacherall   = $_POST['teacherall'];
	$history1   = $_POST['history1'];
	$history2   = $_POST['history2'];
	$history3   = $_POST['history3'];
	$history4   = $_POST['history4'];
	$history5   = $_POST['history5'];
	$history6   = $_POST['history6'];

	$about1   = $_POST['about1'];
	$about2   = $_POST['about2'];
	$about3   = $_POST['about3'];
	$about4   = $_POST['about4'];
	$about5   = $_POST['about5'];
	$about6   = $_POST['about6'];

	$achivment1_1   = $_POST['achivment1_1'];
	$achivment1_2   = $_POST['achivment1_2'];

	$achivment2_1   = $_POST['achivment2_1'];
	$achivment2_2   = $_POST['achivment2_2'];

	$achivment3_1   = $_POST['achivment3_1'];
	$achivment3_2   = $_POST['achivment3_2'];



	if (!empty($sname)) {
		global $sname;
		
		if (!empty($started)) {
			$query = "UPDATE details SET starterd ='{$started}' WHERE sname = '{$sname}' LIMIT 1 ";
			$result = mysqli_query($db, $query);
		}

		if (!empty($objective)) {
			$query = "UPDATE details SET objective ='{$objective}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}

		if (!empty($teacher1)) {
			$query = "UPDATE details SET teacher1 ='{$teacher1}' WHERE sname = '{$sname}' LIMIT 1 ";
			$result = mysqli_query($db, $query);
		}

		if (!empty($teacher2)) {
			$query = "UPDATE details SET teacher2 ='{$teacher2}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($teacher3)) {
			$query = "UPDATE details SET teacher3 ='{$teacher3}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($teacherall)) {
			$query = "UPDATE details SET teacherall ='{$teacherall}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($president)) {
			$query = "UPDATE details SET president ='{$president}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($vice_president)) {
			$query = "UPDATE details SET vice_president ='{$vice_president}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($secretary)) {
			$query = "UPDATE details SET secretary ='{$secretary}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($treasurer)) {
			$query = "UPDATE details SET treasurer ='{$treasurer}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($organizer)) {
			$query = "UPDATE details SET organizer ='{$organizer}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($coodinetor)) {
			$query = "UPDATE details SET coodinator ='{$coodinetor}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}

		if (!empty($history1)) {
			$query = "UPDATE details SET history1 ='{$history1}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($history2)) {
			$query = "UPDATE details SET history2 ='{$history2}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($history3)) {
			$query = "UPDATE details SET history3 ='{$history3}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($history4)) {
			$query = "UPDATE details SET history4 ='{$history4}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}

		if (!empty($history5)) {
			$query = "UPDATE details SET history5 ='{$history5}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}

		if (!empty($history6)) {
			$query = "UPDATE details SET history6 ='{$history6}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}

		if (!empty($about1)) {
			$query = "UPDATE details SET about1 ='{$about1}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($about2)) {
			$query = "UPDATE details SET about2 ='{$about2}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($about3)) {
			$query = "UPDATE details SET about3 ='{$about3}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($about4)) {
			$query = "UPDATE details SET about4 ='{$about4}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($about5)) {
			$query = "UPDATE details SET about5 ='{$about5}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($about6)) {
			$query = "UPDATE details SET about6 ='{$about6}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment1_1)) {
			$query = "UPDATE details SET achivment1_1 ='{$achivment1_1}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment1_2)) {
			$query = "UPDATE details SET achivment1_2 ='{$achivment1_2}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment2_1)) {
			$query = "UPDATE details SET achivment2_1 ='{$achivment2_1}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment2_2)) {
			$query = "UPDATE details SET achivment2_2 ='{$achivment2_2}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment3_1)) {
			$query = "UPDATE details SET achivment3_1 ='{$achivment3_1}' WHERE sname = '{$sname}' LIMIT 1";
			$result = mysqli_query($db, $query);
		}


		if (!empty($achivment3_2)) {
			$query = "UPDATE details SET achivment3_2 ='{$achivment3_2}' WHERE sname = '{$sname}' LIMIT 1 ";
			$result = mysqli_query($db, $query);
		}

$_SESSION['societyname'] = $sname;
header('location:image/admin1.php');


	}



	}





?><!DOCTYPE html>
<html>
<head>
	<title>Details</title>
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
	


<form method="POST" enctype="multipart/form-data">


<label>Society Name</label><input type="text" name="sname">
<br><br>
<hr>
<label>started</label><input type="number" name="started" maxlength="4">
<br>

<label>objective</label><textarea name="objective" maxlength=" 600px;"></textarea>
<br>
<label>president</label><input type="text" name="president" maxlength="60">
<br>
<label>vice_president</label><input type="text" name="vice_president" maxlength="60">
<br>
<label>secretary</label><input type="text" name="secretary" maxlength="60">
<br>
<label>treasurer</label><input type="text" name="treasurer" maxlength="60">
<br>
<label>organizer</label><input type="text" name="organizer" maxlength="60">
<br>
<label>coodinetor</label><input type="text" name="coodinetor" maxlength="60">
<br>
<label>teacher</label><input type="text" name="teacher1" maxlength="60">
<br>
<label>teacher</label><input type="text" name="teacher2" maxlength="60">
<br>
<label>teacher</label><input type="text" name="teacher3" maxlength="60">
<br>
<label>teacherall</label><textarea name="teacherall" maxlength="500"></textarea>
<br>


<br>
<hr>
<label>history</label><textarea name="history1" maxlength="800"></textarea>
<br>
<label>history</label><textarea name="history2" maxlength="800"></textarea>
<br>
<label>history</label><textarea name="history3" maxlength="800"></textarea>
<br>
<label>history</label><textarea name="history4" maxlength="800"></textarea>
<br>
<label>history</label><textarea name="history5" maxlength="800"></textarea>
<br>
<label>history</label><textarea name="history6" maxlength="800"></textarea>
<br>

<br>
<hr>
<label>about</label><textarea name="about1" maxlength="800"></textarea>
<br>
<label>about</label><textarea name="about2" maxlength="800"></textarea>
<br>
<label>about</label><textarea name="about3" maxlength="800"></textarea>
<br>
<label>about</label><textarea name="about4" maxlength="800"></textarea>
<br>
<label>about</label><textarea name="about5" maxlength="800"></textarea>
<br>
<label>about</label><textarea name="about6" maxlength="800"></textarea>




<br>
<hr>
<label>achivment1</label><textarea name="achivment1_1" maxlength="800"></textarea>
<br>
<label>achivment1</label><textarea name="achivment1_2" maxlength="800"></textarea>
<br>




<br>
<hr>
<label>achivment2</label><textarea name="achivment2_1" maxlength="800"></textarea>
<br>
<label>achivment2</label><textarea name="achivment2_2" maxlength="800"></textarea>
<br>


<br>
<hr>
<label>achivment3</label><textarea name="achivment3_1" maxlength="800"></textarea>
<br>
<label>achivment3</label><textarea name="achivment3_2" maxlength="800"></textarea>
<br>



<input type="submit" name="submit">
</form>
<form method="post">
	
	<input type="submit" name="submit2" value="submit2">
	<?php /*if (isset($_POST['submit2'])) {
		/*global $sname;

		if (isset($sname)) {
			# code...
		
		$_SESSION['societyname'] = $sname;
		header('location:image/admin1.php');
}

	}*/ ?>
</form>
</body>
</html>
<?php /* 

include('include/connection.php');
$sname = "";

if (!empty($_POST['submit'])) {
	session_start();
	//$societyname = $_SESSION['societyname'];


	





	if (!empty($started)) {
		$started   = $_POST['started'];
	$president   = $_POST['president'];
	$vice_president   = $_POST['vice_president'];
	$secretary   = $_POST['secretary'];
	$treasurer   = $_POST['treasurer'];
	$organizer   = $_POST['organizer'];
	$coodinetor   = $_POST['coodinetor'];
	$teacher1   = $_POST['teacher1'];
	$teacher2   = $_POST['teacher2'];
	$teacher3   = $_POST['teacher3'];
	$teacherall   = $_POST['teacherall'];
	$history1   = $_POST['history1'];
	$history2   = $_POST['history2'];
	$history3   = $_POST['history3'];
	$history4   = $_POST['history4'];
	$history5   = $_POST['history5'];
	$history6   = $_POST['history6'];

	$about1   = $_POST['about1'];
	$about2   = $_POST['about2'];
	$about3   = $_POST['about3'];
	$about4   = $_POST['about4'];
	$about5   = $_POST['about5'];
	$about6   = $_POST['about6'];

	$achivment1_1   = $_POST['achivment1_1'];
	$achivment1_2   = $_POST['achivment1_2'];

	$achivment2_1   = $_POST['achivment2_1'];
	$achivment2_2   = $_POST['achivment2_2'];

	$achivment3_1   = $_POST['achivment3_1'];
	$achivment3_2   = $_POST['achivment3_2'];
	 $_SESSION['started'] = $started;
	 $_SESSION['president'] = $president;
	 $_SESSION['vice_president'] = $vice_president;
	 $_SESSION['secretary'] = $secretary;
	 $_SESSION['treasurer'] = $treasurer;
	 $_SESSION['organizer'] = $organizer;
	 $_SESSION['coodinetor'] = $coodinetor;
	 $_SESSION['teacher1'] = $teacher1;
	 $_SESSION['teacher2'] = $teacher2;
	 $_SESSION['teacher3'] = $teacher3;
	 $_SESSION['teacherall'] = $teacherall;
	 $_SESSION['history1'] = $history1;
	 $_SESSION['history2'] = $history2;
	 $_SESSION['history3'] = $history3;
	 $_SESSION['history4'] = $history4;
	 $_SESSION['history5'] = $history5;
	 $_SESSION['history6'] = $history6;

	 $_SESSION['about1'] = $about1;
	 $_SESSION['about2'] = $about2;
	 $_SESSION['about3'] = $about3;
	 $_SESSION['about4'] = $about4;
	 $_SESSION['about5'] = $about5;
	 $_SESSION['about6'] = $about6;

	 $_SESSION['achivment1_1'] = $achivment1_1;
	 $_SESSION['achivment1_2'] = $achivment1_2;

	 $_SESSION['achivment2_1'] = $achivment2_1;
	 $_SESSION['achivment2_2'] = $achivment2_2;

	 $_SESSION['achivment3_1'] = $achivment3_1;
	 $_SESSION['achivment3_2'] = $achivment3_2;

	 header('location:images/admin1.php'); 


	}


}

*/?>