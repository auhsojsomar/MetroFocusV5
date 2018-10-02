<?php
	include '../../../User/includes/db.php';
	$id = $_POST['id'];
	$query = mysqli_query($con,"UPDATE appointment SET status='Confirmed' WHERE id = $id");
?>