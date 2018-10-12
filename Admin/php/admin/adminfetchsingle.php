<?php
include '../../../User/includes/db.php';
$id = $_POST['user_id'];
$sql = mysqli_query($con,"SELECT * FROM loginform WHERE id = $id");
while($row = mysqli_fetch_array($sql)){
	$output = array(
		'firstname' => $row['firstname'],
		'lastname' => $row['lastname'],
		'bday' => $row['bday'],
		'username' => $row['username'],
		'cnumber' => $row['cnumber'],
		'password' => $row['password']
	);
}
echo json_encode($output);
?>