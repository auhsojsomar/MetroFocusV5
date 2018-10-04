<?php
    include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $sql = mysqli_query($con,"SELECT status FROM reservation WHERE id = $id AND status != 'Done' AND status != 'Pending' AND status != 'Canceled'");
    $row = mysqli_fetch_array($sql);
    if($row[0] == ""){
        echo "Error";
    }
    else{
        mysqli_query($con,"UPDATE reservation SET status = 'Done' WHERE id = $id AND status != 'Done'");
        $sql = mysqli_query($con,"SELECT category FROM reservation WHERE id = $id");
        $row = mysqli_fetch_array($sql);
        if($row[0] == 'Parts'){
            $sql = mysqli_query($con,"SELECT parts.name,reservation.itemquantity FROM parts,reservation WHERE reservation.itemid = parts.id AND reservation.category = 'Parts'");
            $row = mysqli_fetch_array($sql);
            $item = $row[0];
            $quantity = $row[1];
            $user = $_COOKIE['email'];
            date_default_timezone_set('Asia/Manila');
            $date = date('n/j/Y g:i A');
            mysqli_query($con,"INSERT INTO activitylogs (name,action,quantity,datemod,type,user,description)VALUES('$item','Done',$quantity,'$date','Parts','$user','Reservation')");
        }
        else{
            $sql = mysqli_query($con,"SELECT accessories.name,reservation.itemquantity FROM accessories,reservation WHERE reservation.itemid = accessories.id AND reservation.category = 'Accessories'");
            $row = mysqli_fetch_array($sql);
            $item = $row[0];
            $quantity = $row[1];
            $user = $_COOKIE['email'];
            date_default_timezone_set('Asia/Manila');
            $date = date('n/j/Y g:i A');
            mysqli_query($con,"INSERT INTO activitylogs (name,action,quantity,datemod,type,user,description)VALUES('$item','Done',$quantity,'$date','Accessories','$user','Reservation')");
        }
        echo "Done";
    }
?>