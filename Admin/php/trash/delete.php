<?php
    include '../../../User/includes/db.php';
    $id = $_POST['reasonid'];
    $type = $_POST['reasontype'];
    $action = $_POST['reasonaction'];
    $description = $_POST['reason'];
    $user = $_COOKIE['email'];
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/y g:i A');
    
    if($type == 'Brand'){
        if($action == 'Delete'){
            $sql = mysqli_query($con,"SELECT brand FROM brand WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Brand','$user','$description')");
            mysqli_query($con,"DELETE FROM brand WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            foreach($array as $newid){
                $sql = mysqli_query($con,"SELECT brand FROM brand WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row[0] != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Brand','$user','$description')");
                }
                mysqli_query($con,"DELETE FROM brand WHERE id = $newid");
            }
        }
    }
?>