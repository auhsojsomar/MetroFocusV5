<?php
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = mysqli_query($con,"SELECT * FROM appointment ORDER BY id DESC");
while($row = mysqli_fetch_assoc($sql)){
    if($row['status'] == 'Canceled' || $row['status'] == 'Reject' || $row['status'] == 'Done'){
        $button = null;
    }
    else if($row['status'] == 'Confirmed'){
        $button = '<button style="width:20px;" type="button" name="show" id="'.$row["id"].'" class="button is-warning is-small tooltip" data-tooltip="Show"><i class="fal fa-eye"></i></button><button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button><button style="width:20px;" type="button" name="done" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Done"><i class="fal fa-check"></i></button>';
    }
    else{
        $button = '<button style="width:20px;" type="button" name="show" id="'.$row["id"].'" class="button is-warning is-small tooltip" data-tooltip="Show"><i class="fal fa-eye"></i></button><button style="width:20px;" type="button" name="confirm" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Confirm"><i class="fal fa-check"></i></button><button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button>';
    }
    $output['data'][] = array(
        $row["username"],
        $row["concern"],
        $row["schedule"],
        $row["cnumber"],
        $row["remarks"],
        $row["status"],
        $button
    );
}
echo json_encode($output);
?>