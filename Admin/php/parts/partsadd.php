<?php 
	include '../../../User/includes/db.php';
	$new_name = rand(). '.' ."jpeg";
	$destination = 'upload/' . $new_name;
	move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$stats = $_POST['status'];
	if(mysqli_query($con,"INSERT INTO parts (image,name,brand,category,price,quantity,description,status)VALUES('$new_name','$name','$brand','$category','$price','$quantity','$description','$stats')")){
		echo "Success";
	}
	else{
		echo $name;
	}
	$user = $_COOKIE['email'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name','Added','$date','Parts','$user')");
 ?>