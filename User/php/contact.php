<?php
    include '../includes/db.php';
    $co = $_POST['cnum'];
    $sql = mysqli_query($con,"SELECT * FROM loginform WHERE cnumber = '$co'");
    $row = mysqli_num_rows($sql);
    if($row > 0){
        echo "Exist";
    }
    else{
        echo "Not Exist";
    }
?>