<?php
    include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $type = $_POST['type'];
    $action = $_POST['restoreaction'];
    $user = $_COOKIE['email'];
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/y g:i A');

    if($type == 'Brand'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT brand FROM brand WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Brand','$user')");
            mysqli_query($con,"UPDATE brand SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT brand FROM brand WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Brand','$user')");
                }
                mysqli_query($con,"UPDATE brand SET deleted = 0 WHERE id = $newid");
            }
        }
    }
?>