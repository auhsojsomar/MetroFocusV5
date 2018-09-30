<?php
    include '../../../User/includes/db.php';
    $id = $_POST['user_id3'];
    $user = $_COOKIE['email'];
    $desc = $_POST['problem'];
    $quan = $_POST['defect'];
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/Y g:i A');
    $sql = mysqli_query($con,"SELECT * FROM accessories WHERE id = $id");
    $row = mysqli_fetch_array($sql);
    mysqli_query($con,"INSERT INTO activitylogs (name,action,quantity,datemod,type,user,description)VALUES('$row[2]','Defect',$quan,'$date','Accessories','$user','$desc')");
    mysqli_query($con,"UPDATE accessories SET quantity = quantity - $quan");
?>