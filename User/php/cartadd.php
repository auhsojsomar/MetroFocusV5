<?php 
	include '../includes/db.php';
	$num = $_POST['cart_count'];
	$email = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$datee = date('n/j/Y g:i:s A');
	$d = $_POST['rdate'];
	$itemid = $_POST['item_id'];
	$category = $_POST['categ'];
	$quan = $_POST['qquantity'];
	for ($i=0; $i < $num; $i++) { 
		mysqli_query($con,"INSERT INTO reservation (username,reservationdate,itemid,category,itemquantity)VALUES('$email','$d',$itemid[$i],'$category[$i]',$quan[$i])");
		mysqli_query($con,"DELETE FROM cart WHERE user = '$email'");
		if($category[$i] == 'Parts'){
			mysqli_query($con,"UPDATE parts SET quantity = quantity - $quan[$i] WHERE id = $itemid[$i]");
		}
		if($category[$i] == 'Accessories'){
			mysqli_query($con,"UPDATE accessories SET quantity = quantity - $quan[$i] WHERE id = $itemid[$i]");
		}
	}
	mysqli_query($con,"INSERT INTO notifications (user,type,description,date_time)VALUES('$email','Reservation','$num','$datee')");
 ?>