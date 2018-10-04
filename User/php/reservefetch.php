<?php
    include '../includes/db.php';
    $id = $_POST['id'];
    mysqli_query($con,"UPDATE reservation SET status = 'Canceled' WHERE id = $id");
?>