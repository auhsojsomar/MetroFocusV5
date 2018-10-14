<?php
    session_start();
    include '../includes/db.php';
    $code = $_POST['code'];
    $type = $_POST['type'];

    if($type == 'Confirm'){
        if(isset($_SESSION['newpass'])){
            $user = $_SESSION['newpass'];
            $sql = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user' AND newpass = '$code'");
            if(mysqli_num_rows($sql) > 0){
                echo 'New';
            }
            else{
                echo 'Invalid code';
            }
        }
        else{
            $user = $_SESSION['user'];
            $sql = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user' AND verification = '$code'");
            if(mysqli_fetch_assoc($sql)){
                mysqli_query($con,"UPDATE loginform SET verification = 'Verified' WHERE username = '$user'");
                echo 'Success';
            }
            else {
                echo 'Invalid code';
            }
        }
    }
    if($type == 'NewPass'){
        $fuser = $_POST['fuser'];
        $sql = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$fuser'");
        $row = mysqli_fetch_assoc($sql);
        $cn = $row['cnumber'];
        $rand = rand(100000,999999);
        include_once 'code.php';
        mysqli_query($con,"UPDATE loginform SET newpass = '$rand' WHERE username = '$fuser'");
        $_SESSION['newpass'] = $fuser;
    }
?>