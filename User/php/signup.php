<?php 
	include '../includes/db.php';
	session_start();
	session_unset();
	$date = date('F d, Y');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$bday = $_POST['bday'];
	$email = $_POST['email'];
	$cn = $_POST['cnum'];
	$password = md5($_POST['password']);
	$rand = rand(100000,999999);
	$_SESSION['user'] = $email;
	if($sql = mysqli_query($con,"INSERT INTO loginform (firstname,lastname,username,password,cnumber,created,verification,bday)VALUES('$fname','$lname','$email','$password','$cn','$date','$rand','$bday')")){
		$_SESSION['user'] = $email;
		include_once 'code.php';
		echo "Success";
	}
 ?>