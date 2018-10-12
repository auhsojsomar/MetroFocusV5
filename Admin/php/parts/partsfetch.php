<?php
include '../../../User/includes/db.php';
$sql = mysqli_query($con,"SELECT * FROM parts WHERE deleted = 0 ORDER BY name");
$output = array('data' => array());
while($row = mysqli_fetch_array($sql)){
    $check = '<input type="checkbox" name="parts_id[]" value="'.$row['id'].'">';
    $loadbutton = '&nbsp&nbsp<button style="font-size: .55rem;" type="button" class="button is-small is-primary" name="load" id='.$row["id"].'> Load</button>';
    $button = '<button style="width:20px;" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small tooltip" data-tooltip="Edit"><i class="fal fa-edit"></i></button><button style="width:20px;" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small tooltip" data-tooltip="Delete"><i class="fal fa-trash-alt"></i></button><button style="width:20px;" type="button" name="defect" id="'.$row["id"].'" class="button is-warning is-small tooltip" data-tooltip="Defect"><i class="fal fa-exclamation-triangle"></i></button><button style="width:20px;" type="button" name="return" id="'.$row["id"].'" class="button is-success is-small tooltip" data-tooltip="Return"><i class="fal fa-exchange"></i></button>';
    $image = '';
    if($row["image"] != '')
    {
        $image = '<img class="image is-48x48" src="php/parts/upload/'.$row["image"].'">';
    }
    else
    {
        $image = '';
    }
    $output['data'][] = array(
        $check,
        $image,
        $row['name'],
        $row['brand'],
        $row['category'],
        $row['price'],
        $row['quantity'].$loadbutton,
        $row['status'],
        $button
    );
}
echo json_encode($output);
?>