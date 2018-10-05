<?php
    session_start();
    include '../includes/db.php';
    $user = $_SESSION['user'];
    $code = $_POST['code'];
    $sql = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user' AND verification = '$code'");
    if(mysqli_fetch_assoc($sql)){
        mysqli_query($con,"UPDATE loginform SET verification = 'Verified'");
        echo 'Success';
    }
    else {
        echo 'Invalid code';
    }
?>