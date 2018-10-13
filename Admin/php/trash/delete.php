<?php
    include '../../../User/includes/db.php';
    $id = $_POST['reasonid'];
    $type = $_POST['reasontype'];
    $action = $_POST['reasonaction'];
    
    if($type == 'Brand'){
        if($action == 'Delete'){
            mysqli_query($con,"DELETE FROM brand WHERE id = $id");
        }
        else if($action == 'DeleteAll'){
            $array = explode(',',$id);
            if($id != 'on'){}
        }
    }
?>