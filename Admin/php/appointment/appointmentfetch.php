<?php
include '../../../User/includes/db.php';
$output = array();
$query = "SELECT * FROM appointment  WHERE deleted = 0 ORDER BY id DESC";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row["username"];
    $sub_array[] = $row["concern"];
    $sub_array[] = $row["schedule"];
    $sub_array[] = $row["cnumber"];
    $sub_array[] = $row["remarks"];
    $sub_array[] = $row["status"];
    $sub_array[] = '<button style="width:20px;" type="button" name="show" id="'.$row["id"].'" class="button is-primary is-small tooltip" data-tooltip="Show"><i class="fal fa-eye"></i></button><button style="width:20px;" type="button" name="confirm" id="'.$row["id"].'" class="button is-link is-small tooltip" data-tooltip="Confirm"><i class="fal fa-file-check"></i></button><button style="width:20px;" type="button" name="reject" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Reject"><i class="fal fa-times"></i></button><button style="width:20px;" type="button" name="done" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Done"><i class="fal fa-check"></i></button>';
    $data[] = $sub_array;
}
$output = array(
    "data" => $data
);
echo json_encode($output);
?>