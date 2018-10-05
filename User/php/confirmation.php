<?php
    include '../includes/db.php';
    $user = $_SESSION['NotVerify'];
    $code = $_POST['code'];
    $sql = mysqli_query($con,"SELECT verification FROM loginform WHERE username = '$user'");
?>