<?php 
	session_start();
	include '../includes/db.php';
	$user = $_COOKIE['email'];
	$sql = mysqli_query($con,"SELECT cnumber FROM loginform WHERE username = '$user'");
	$row = mysqli_fetch_array($sql);
	date_default_timezone_set('Asia/Manila');
	$datee = date('m/d/Y h:i A');
	$concern = $_POST['concern'];
	$schedule = $_POST['schedule'];
	$remarks = $_POST['remarks'];
	include '../includes/db.php';
	if(mysqli_query($con,"INSERT INTO appointment (username,concern,schedule,cnumber,remarks)VALUES('$user','$concern','$schedule','$row[0]','$remarks')")){
		mysqli_query($con,"INSERT INTO notifications (user,type,date_time)VALUES('$user','Appointment','$datee')");
		echo "Success";
	}
	else{
		echo "Not available";
	}
 ?>