<?php 
	include '../../../User/includes/db.php';
	$id = $_POST['reasonid'];
	$description = $_POST['reason'];
	$action = $_POST['reasonaction'];
	date_default_timezone_set('Asia/Manila');
	$date = date('n/j/Y g:i A');
	$user = $_COOKIE['email'];
	if($action == 'Delete'){
		$sql = mysqli_query($con,"SELECT question FROM faq WHERE id = $id");
		$question = mysqli_fetch_array($sql);
		mysqli_query($con,"UPDATE faq SET deleted = 1, date_deleted = '$date' WHERE id = $id");
		mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$question[0]','Deleted','$date','FAQ','$user','$description')");
	}
	else if($action == 'DeleteAll'){
		$array = explode(',',$id);
		foreach($array as $newid){
			$sql = mysqli_query($con,"SELECT question FROM faq WHERE id = $newid");
			$question = mysqli_fetch_array($sql);
			mysqli_query($con,"UPDATE faq SET deleted = 1, date_deleted = '$date' WHERE id = $newid");
			if($question != ''){
				mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$question[0]','Deleted','$date','FAQ','$user','$description')");
			}
		}
	}
 ?>