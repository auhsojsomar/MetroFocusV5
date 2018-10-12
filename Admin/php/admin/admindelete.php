<?php 
include '../../../User/includes/db.php';
$id = $_POST['reasonid'];
$description = $_POST['reason'];
$action = $_POST['reasonaction'];
date_default_timezone_set('Asia/Manila');
$date = date('n/j/Y g:i A');
$user = $_COOKIE['email'];
$query = mysqli_query($con,"SELECT * FROM loginform WHERE status = 'Admin' AND deleted = 0");
$row = mysqli_num_rows($query);
if($row <= 1){
	echo "Error";
}
else{
	if($action == 'Delete'){
		if(mysqli_query($con,"UPDATE loginform SET deleted = 1, date_deleted = '$date' WHERE id = $id")){
			$sql = mysqli_query($con,"SELECT username FROM loginform WHERE id = $id");
			$name = mysqli_fetch_array($sql);
			mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$name[0]','Deleted','$date','Admin','$user','$description')");
			echo "Data Deleted";
		}
	}
	else if($action == 'DeleteAll'){
		$array = explode(',',$id);
		foreach($array as $newid){
			if(mysqli_query($con,"UPDATE loginform SET deleted = 1, date_deleted = '$date' WHERE id = $newid")){
				$sql = mysqli_query($con,"SELECT username FROM loginform WHERE id = $newid");
				$name = mysqli_fetch_array($sql);
				mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$name[0]','Deleted','$date','Admin','$user','$description')");
				echo "Data Deleted";
			}
		}
	}
}
?>