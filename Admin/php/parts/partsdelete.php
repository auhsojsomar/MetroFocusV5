<?php 
include '../../../User/includes/db.php';
$id = $_POST['reasonid'];
$description = $_POST['reason'];
$action = $_POST['reasonaction'];
date_default_timezone_set('Asia/Manila');
$date = date('n/j/Y g:i A');
$user = $_COOKIE['email'];
if($description == 'Delete'){
	$sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $id");
	$name = mysqli_fetch_array($sql);
	mysqli_query($con,"UPDATE parts SET deleted = 1, date_deleted = '$date' WHERE id = $id");
	mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name[0]','Deleted','$date','Parts','$user')");
}
else if($description == 'DeleteAll'){
	$array = explode(',',$id);
	foreach($array as $newid){
		$sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $newid");
		$name = mysqli_fetch_array($sql);
		mysqli_query($con,"UPDATE parts SET deleted = 1, date_deleted = '$date' WHERE id = $id");
		mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$name[0]','Deleted','$date','Parts','$user')");
	}
}
?>