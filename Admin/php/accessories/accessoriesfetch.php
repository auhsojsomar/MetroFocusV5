<?php
include '../../../User/includes/db.php';
$output = array();
$query = "SELECT * FROM accessories  WHERE deleted = 0 ORDER BY name";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
        $image = '<img class="image is-48x48" src="php/accessories/upload/'.$row["image"].'">';
		// $image = '<img class="image is-48x48" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'">';
	}
	else
	{
		$image = '';
	}
    $sub_array = array();
    $sub_array[] = $image;
    $sub_array[] = $row["name"];
    $sub_array[] = $row["brand"];
    $sub_array[] = $row["category"];
    $sub_array[] = $row["price"];
    $sub_array[] = $row["quantity"].'&nbsp&nbsp<button style="font-size: .55rem;" type="button" class="button is-small is-primary" name="load" id='.$row["id"].'> Load</button>';
    $sub_array[] = $row['status'];
    $sub_array[] = '<button style="width:20px;" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small tooltip" data-tooltip="Edit"><i class="fal fa-edit"></i></button><button style="width:20px;" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Delete"><i class="fal fa-trash-alt"></i></button><button style="width:20px;" type="button" name="defect" id="'.$row["id"].'" class="button is-warning is-small tooltip" data-tooltip="Defect"><i class="fal fa-exclamation-triangle"></i></button><button style="width:20px;" type="button" name="return" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Return"><i class="fal fa-exchange"></i></button>';
    $data[] = $sub_array;
}
$output = array(
    "data" => $data
);
echo json_encode($output);
?>