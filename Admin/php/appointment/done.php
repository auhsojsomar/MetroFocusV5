<?php
    include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $sql = mysqli_query($con,"SELECT status FROM appointment WHERE id = $id AND status != 'Done' AND status != 'Pending' AND status != 'Canceled'");
    $row = mysqli_fetch_array($sql);
    if($row[0] == ""){
        echo "Error";
    }
    else{
        mysqli_query($con,"UPDATE appointment SET status = 'Done' WHERE id = $id AND status != 'Done'");
        echo "Done";    
    }
    $sql2 = mysqli_query($con,"SELECT username FROM appointment WHERE id = $id");
    $row2 = mysqli_fetch_array($sql2);
    $username = $row2[0];
    $user = $_COOKIE['email'];
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/Y g:i A');
    mysqli_query($con,"INSERT INTO activitylogs (name,action,quantity,datemod,type,user,description)VALUES('$username','Done','$date','Appointment','$user')");
?>