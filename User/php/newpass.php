<?php
    session_start();
    include '../includes/db.php';
    $user = $_SESSION['newpass'];
    $pass = md5($_POST['password']);
    mysqli_query($con,"UPDATE loginform SET password = '$pass' WHERE username = '$user'");
?>