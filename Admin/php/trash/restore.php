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
    else if($type == 'Category'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT category FROM category WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Category','$user')");
            mysqli_query($con,"UPDATE category SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT category FROM category WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Category','$user')");
                }
                mysqli_query($con,"UPDATE category SET deleted = 0 WHERE id = $newid");
            }
        }
    }
    else if($type == 'Parts'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Parts','$user')");
            mysqli_query($con,"UPDATE parts SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Parts','$user')");
                }
                mysqli_query($con,"UPDATE parts SET deleted = 0 WHERE id = $newid");
            }
        }
    }
    else if($type == 'Accessories'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT name FROM accessories WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Accessories','$user')");
            mysqli_query($con,"UPDATE accessories SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT name FROM accessories WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Accessories','$user')");
                }
                mysqli_query($con,"UPDATE accessories SET deleted = 0 WHERE id = $newid");
            }
        }
    }
    else if($type == 'Admin'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='Admin' AND id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Admin','$user')");
            mysqli_query($con,"UPDATE loginform SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='Admin' AND id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Admin','$user')");
                }
                mysqli_query($con,"UPDATE loginform SET deleted = 0 WHERE id = $newid");
            }
        }
    }
    else if($type == 'Registered Users'){
        if($action == 'Restore'){
            $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='User' AND id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Registered Users','$user')");
            mysqli_query($con,"UPDATE loginform SET deleted = 0 WHERE id = $id");
        }
        else if($action == 'RestoreAll'){
            foreach($id as $newid){
                $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='User' AND id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$row[0]','Recover','$date','Registered Users','$user')");
                }
                mysqli_query($con,"UPDATE loginform SET deleted = 0 WHERE id = $newid");
            }
        }
    }
?>