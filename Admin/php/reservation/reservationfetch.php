<?php 
include '../../../User/includes/db.php';
$sql = mysqli_query($con,"SELECT reservation.id AS id,reservation.username AS username,reservation.reservationdate AS reservedate,parts.name AS itemname,reservation.itemquantity AS itemquantity,reservation.status AS status,reservation.reservationid AS reservationid FROM reservation,parts WHERE reservation.deleted = 0 AND reservation.category = 'Parts' AND itemid = parts.id ORDER BY reservation.id DESC");
$output = array('data' => array());
while($row = mysqli_fetch_array($sql)){
    if($row['status'] == 'Canceled' || $row['status'] == 'Reject' || $row['status'] == 'Done'){
        $button = null;
    }
    else if($row['status'] == 'Confirmed'){
        $button = '<button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button><button style="width:20px;" type="button" name="done" id="'.$row["id"].'" class="button is-info is-small tooltip" data-tooltip="Done"><i class="fal fa-file-check"></i></button>';
    }
    else{
        $button = '<button style="width:20px;" type="button" name="confirm" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Confirm"><i class="fal fa-check"></i></button><button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button>';
    }
    $output['data'][] = array(
        $row['reservationid'],
        $row['username'],
        $row['reservedate'],
        $row['itemname'],
        $row['itemquantity'],
        $row['status'],
        $button
    );
}
echo json_encode($output);
?>