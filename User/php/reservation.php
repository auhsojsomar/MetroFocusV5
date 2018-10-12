<?php 
	include '../includes/db.php';
	$itemid = $_POST['uid'];
	session_start();
	$user = $_COOKIE['email'];
	$quantity = $_POST['quantity'];
	date_default_timezone_set('Asia/Manila');
	$datee = date('n/j/Y g:i:s A');
	$d = $_POST['rdate'];
	$category = $_POST['category'];
	$type = $_POST['categtype'];
	if($category == 'Parts')
	{
		$sql = mysqli_query($con,"SELECT reservationid FROM reservation ORDER BY reservationid DESC");
		$row = mysqli_fetch_array($sql);
		$new = $row[0]+1;
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity,reservationid)VALUES('$user','$d',$itemid,'Parts',$quantity,$new)");
		mysqli_query($con,"UPDATE parts SET quantity = quantity - $quantity WHERE id = $itemid");
		mysqli_query($con,"INSERT INTO notifications (user,type,description,date_time)VALUES('$user','Reservation','1','$datee')");
	}
	else if($category == 'Accessories')
	{
		$sql = mysqli_query($con,"SELECT reservationid FROM reservation ORDER BY reservationid DESC");
		$row = mysqli_fetch_array($sql);
		$new = $row[0]+1;
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity,reservationid)VALUES('$user','$d',$itemid,'Accessories',$quantity,$new)");
		mysqli_query($con,"UPDATE accessories SET quantity = quantity - $quantity WHERE id = $itemid");
		mysqli_query($con,"INSERT INTO notifications (user,type,description,date_time)VALUES('$user','Reservation','1','$datee')");
	}
	// else if($category == 'Cart')
	// {
	// 	if($type == 'Parts'){
	// 		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$user','$datee',$itemid,'Parts',$quantity)");
	// 		mysqli_query($con,"UPDATE parts SET quantity = quantity - $quantity WHERE id = $itemid");
	// 	}
	// }
?>