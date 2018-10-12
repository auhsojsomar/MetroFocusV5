<?php 
	include '../../../User/includes/db.php';
	$id = $_POST['reasonid'];
	$description = $_POST['reason'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	if(mysqli_query($con,"UPDATE brand SET deleted = 1, date_deleted = '$date' WHERE id = $id")){
		echo "Data Deleted";
	}
	$user = $_COOKIE['email'];
	$sql = mysqli_query($con,"SELECT brand FROM brand WHERE id = $id");
	$name = mysqli_fetch_array($sql);
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$name[0]','Deleted','$date','Brand','$user','$description')");

 ?>