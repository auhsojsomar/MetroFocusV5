<?php
    include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $sql = mysqli_query($con,"SELECT status FROM appointment WHERE id = $id AND status != 'Done'");
    $row = mysqli_fetch_array($sql);
    if($row[0] == ""){
        echo "Error";
    }
    else{
        mysqli_query($con,"UPDATE appointment SET status = 'Done' WHERE id = $id AND status != 'Done'");
        echo "Done";    
    }
?>