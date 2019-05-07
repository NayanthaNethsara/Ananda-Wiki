<section class="mbr-section form1 cid-rp3t4LNGL5" id="form1-15">
<div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT US</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Your Comments&nbsp;</h3>
            </div>
        </div>
    </div>


<div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
		

		<form method="post" action="about.php#form1-15">
			
			<label style="color: grey; width: 50px;">Name </label> <!--div style="background-color: #ffc6c6;  width: 300px; height: 50px; text-align: center; padding: 10px; color: white; border-radius: 50px;" >Name is Requered</div-->

			<br>

			<input type="text" name="name" maxlength="50" class="form-control" style="width: 100%;"> 


			<br>

			<label style="width: 50%; color: grey;">E-Mail</label><br>

			<input type="email" name="email" maxlength="100" class="form-control" style="width: 100%; ">


			<br>

			<label style="width: 50%; color: grey;">Phone No:</label><br>

			<input type="text" name="number" maxlength="13" class="form-control" style="width: 100%; ">


			<br>
		

			<br>
			<label style="width: 50%; color: grey;">Message</label><br>
			<textarea type="text" class="form-control" name="message" rows="7" id="textarea">



			 </textarea>	

			 <br>


			 <center>

			 	<input type="submit" name="send" value="Send" style=" color: white; background-color: #00aeef; width: 150px; border: none; text-align: center; height: 50px; border-radius: 50px;">


			 </center>	

		</form>    	
<?php if (isset($_POST['send'])) {
	
		$errors = array();



		$name = $_POST['name'];
		$message = $_POST['message'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		//$to = "nayanthanethsara@gmail.com";


if (empty($name)) {
		array_push($errors, "Name Is Required");

	}



if (empty($message)) {
		array_push($errors, "Name Is Required");

	}


if (empty($number)) {
		array_push($errors, "Name Is Required");

	}


if (empty($email)) {
		array_push($errors, "Name Is Required");

	}


if(count($errors) < 1) {
		$name = $_POST['name'];

		$subject = "contact us";
		$message = $_POST['message'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$to = "nayanthanethsara@gmail.com";

		$from = "From: " . $email;

		$messages =  $message. "

		 ". $number;


	if(mail($to, $subject, $messages,$from)){


			echo '<script>'. 'alert("Message Successful.")'. '</script>';


	}else{

		echo '<script>'. 'alert("There are some errors.")'. '</script>';
	}

	}

} ?>

    </div>
    </div>
</div>




</section>