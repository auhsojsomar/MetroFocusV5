<?php
    include '../../../User/includes/db.php';
    foreach($_POST['id'] as $id){
        mysqli_query($con,"UPDATE brand SET deleted = 1 WHERE id = $id");
    }
?>