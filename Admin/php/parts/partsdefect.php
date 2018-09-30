<?php
    include '../../../User/includes/db.php';
    $id = $_POST['uid'];
    $user = $_COOKIE['email'];
    $desc = $_POST['problem'];
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/Y g:i A');
    $sql = mysqli_query($con,"SELECT * FROM activitylogs WHERE id = $id");
    $row = mysqli_fetch_array($sql);
    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Defect','$date','Parts','$user','$desc')");
?>