<?php
include '../../../User/includes/db.php';
$id = $_POST['user_id'];
$sql = mysqli_query($con,"SELECT * FROM appointment WHERE id = $id");
while($row = mysqli_fetch_array($sql)){
	$output = array(
		"username" => $row['username'],
		"concern" => $row['concern'],
		"schedule" => $row['schedule'],
		"cnumber" => $row['cnumber'],
		"remarks" => $row['remarks'],
		"status" => $row['status']
	);
}
echo json_encode($output);
?>