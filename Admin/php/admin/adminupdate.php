<?php
	include '../../../User/includes/db.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	// $email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$id = $_POST['user_id'];
	$sql = mysqli_query($con,"SELECT username,password FROM loginform WHERE deleted = 0 AND id = $id");
	$row = mysqli_fetch_array($sql);
	if($_POST['password'] == '')
	{
		$password = $row[1];
	}
	else{
		$password = md5($_POST['password']);
	}
	if($_POST['email'] == $row[0]){
		$email = $row[0];
	}
	else{
		$email = $_POST['email'];
	}
	if(mysqli_query($con,"UPDATE loginform SET firstname = '$fname',lastname = '$lname',username = '$email',cnumber = '$cnumber',password = '$password' WHERE id = $id")){
		echo "Success";
	}
	else{
		echo $_POST['email'];
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$email','Edited','$date','Admin','$user')");
?>