<?php 
	include '../../../User/includes/db.php';
	$id = $_POST['id'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	if(mysqli_query($con,"UPDATE faq SET deleted = 1, date_deleted = '$date' WHERE id = $id")){
		echo "Success";
	}
	else{
		echo "Error";
	}
	$user = $_COOKIE['email'];
	$sql = mysqli_query($con,"SELECT question FROM faq WHERE id = $id");
	$question = mysqli_fetch_array($sql);
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$question[0]','Deleted','$date','FAQ','$user')");
 ?>