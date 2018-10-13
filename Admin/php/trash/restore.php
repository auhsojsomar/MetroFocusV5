<?php
    include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $type = $_POST['type'];

    if($type == 'Brand'){
        mysqli_query($con,"UPDATE brand SET deleted = 0 WHERE id = $id");
    }
?>