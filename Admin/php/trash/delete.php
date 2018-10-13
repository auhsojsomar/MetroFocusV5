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
    else if($type == 'Category'){
        if($action == 'Delete'){
            $sql = mysqli_query($con,"SELECT category FROM category WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Category','$user','$description')");
            mysqli_query($con,"DELETE FROM category WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            foreach($array as $newid){
                $sql = mysqli_query($con,"SELECT category FROM category WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row[0] != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Category','$user','$description')");
                }
                mysqli_query($con,"DELETE FROM category WHERE id = $newid");
            }
        }
    }
    else if($type == 'Parts'){
        if($action == 'Delete'){
            $sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Parts','$user','$description')");
            mysqli_query($con,"DELETE FROM parts WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            foreach($array as $newid){
                $sql = mysqli_query($con,"SELECT name FROM parts WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row[0] != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Parts','$user','$description')");
                }
                mysqli_query($con,"DELETE FROM parts WHERE id = $newid");
            }
        }
    }
    else if($type == 'Accessories'){
        if($action == 'Delete'){
            $sql = mysqli_query($con,"SELECT name FROM accessories WHERE id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Accessories','$user','$description')");
            mysqli_query($con,"DELETE FROM accessories WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            foreach($array as $newid){
                $sql = mysqli_query($con,"SELECT name FROM accessories WHERE id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row[0] != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Accessories','$user','$description')");
                }
                mysqli_query($con,"DELETE FROM accessories WHERE id = $newid");
            }
        }
    }
    else if($type == 'Admin'){
        if($action == 'Delete'){
            $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='Admin' AND id = $id");
            $row = mysqli_fetch_array($sql);
            mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Admin','$user','$description')");
            mysqli_query($con,"DELETE FROM loginform WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            foreach($array as $newid){
                $sql = mysqli_query($con,"SELECT username FROM loginform WHERE status='Admin' AND id = $newid");
                $row = mysqli_fetch_array($sql);
                if($row[0] != ''){
                    mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user,description)VALUES('$row[0]','Permanent Delete','$date','Admin','$user','$description')");
                }
                mysqli_query($con,"DELETE FROM loginform WHERE id = $newid");
            }
        }
    }
?>