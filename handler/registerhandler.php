<?php

$con = new DBController();
session_start();

$uname = ""; #first name
$em = "";	#email
$pass = "";	#password
$pass2 = "";	#confirm password
$date = "";
$error_array = array(); #error array


if (isset($_POST['signup'])) {
	#


	#reg form values
	#values for first name
	$uname = strip_tags($_POST["reg_uname"]);
	$uname = ucfirst(strtolower($uname));
	$uname = str_replace(' ', '', $uname);
	$_SESSION['reg_uname'] = $uname;

	#values for first name

	#values for first name
	$em = strip_tags($_POST["reg_email"]);
	$em = strtolower($em);
	$em = str_replace(' ', '', $em);
	$_SESSION['reg_email'] = $em;


	#values for first name
	$pass = strip_tags($_POST["reg_pass"]);
	$pass2 = strip_tags($_POST["reg_pass2"]);

	$date = date('Y-m-d');


	
	

	#checking that the email format is correct or not

	if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
		
		$em =  filter_var($em, FILTER_VALIDATE_EMAIL);

		#check if email already in use

		$email_check = mysqli_query($con->con, "SELECT email FROM user_register WHERE email = '$em'");
		$num_rows = mysqli_num_rows($email_check);

		if ($num_rows > 0) {
			array_push($error_array, "Email already in use<br>");
		}
	
	}
	else{
		array_push($error_array, "Invalid format<br>");
	}

	if (strlen($uname) > 12 || strlen($uname) < 3) {
		array_push($error_array, "username must be between 4 to 12 characters<br>");
	}

	if ($pass != $pass2) {
		array_push($error_array,"you'r password do not match<br>");
	}
	else{
		if (preg_match('[^A-Za-z0-9]', $pass)) {
			array_push($error_array,"you'r password  can only contain chracters and numbers<br>");
		}

	}
	if (strlen($pass) < 8 || strlen($pass) > 20) {
		array_push($error_array,"password must be between 8 to 20 characters<br>");
	}


	if (empty($error_array)) {
        # code...
        #$pass = md5($pass); #encrypt password 
        #


        #GENrating a user name by  concatnating first and last name
        $username = strtolower($uname);
		$check_username_query = mysqli_query($con->con,"SELECT uname FROM  user_register WHERE uname = '$username' ");

		$add_to_username = 0;

		while (mysqli_num_rows($check_username_query)!= 0) {
			$add_to_username++;
			$username = $username ."_". $add_to_username;
			$check_username_query = mysqli_query($con->con,"SELECT uname FROM  user_register WHERE uname= '$username' ");
		}
		

		$adding_data_into_databaase = mysqli_query($con->con,"INSERT INTO user_register  VALUES ('', '$username', '$em', '$pass', '$date')");


		array_push($error_array, "<span> registered successfully </span><br>");

		#clearing session
		$_SESSION['reg_uname'] = "";
		$_SESSION['reg_email'] = "";


	}
    else {
        echo "<script> alert ('Invalid information')</script>";
    }
	
}

