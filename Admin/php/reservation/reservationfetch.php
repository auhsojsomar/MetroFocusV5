<?php 
include '../../../User/includes/db.php';
$output = array('data' => array());
$sql = "SELECT reservation.id AS id,reservation.username AS username,reservation.reservationdate AS reservedate,parts.name AS itemname,reservation.itemquantity AS itemquantity,reservation.status AS status FROM reservation,parts WHERE reservation.deleted = 0 AND reservation.category = 'Parts' AND itemid = parts.id ORDER BY reservation.id DESC";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
    $actionButton = '<button style="width:20px;" type="button" name="confirm" id="'.$row["id"].'" class="button is-link is-small tooltip" data-tooltip="Confirm"><i class="fal fa-file-check"></i></button><button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button><button style="width:20px;" type="button" name="done" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Done"><i class="fal fa-check"></i></button>';
    $output['data'][] = array(
        $row['username'],
        $row['reservedate'],
        $row['itemname'],
        $row['itemquantity'],
        $row['status'],
        $actionButton
    );
}
$con->close();
echo json_encode($output);
 ?>