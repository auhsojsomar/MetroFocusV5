<?php
	include '../../../User/includes/db.php';
	$quantity = $_POST['loadtext'];
	$id = $_POST['user_id2'];
	$query = mysqli_query($con,"UPDATE parts SET quantity = quantity + $quantity WHERE id = $id");
	$sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $id");
	$name = mysqli_fetch_array($sql);
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,quantity,datemod,type,user)VALUES('$name[0]','Add Stocks',$quantity,'$date','Parts','$user')");
?>