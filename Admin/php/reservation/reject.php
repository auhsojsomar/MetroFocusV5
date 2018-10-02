<?php
	include '../../../User/includes/db.php';
	$id = $_POST['id'];
	$query = mysqli_query($con,"UPDATE reservation SET status='Reject' WHERE id = $id");
?>