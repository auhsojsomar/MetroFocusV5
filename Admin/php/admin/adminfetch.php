<?php
include '../../../User/includes/db.php';
$sql = mysqli_query($con,"SELECT * FROM loginform WHERE status = 'Admin' AND deleted = 0 ORDER BY id DESC");
$output = array('data' => array());
while($row = mysqli_fetch_array($sql)){
    $check = '<input type="checkbox" value="'.$row['id'].'">';
    $button = '<button style="width:40px;" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-edit"></i> Edit</button><button style="width:40px;" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
    $output['data'][] = array(
        $check,
        $row['firstname'],
        $row['lastname'],
        $row['username'],
        $row['cnumber'],
        $row['created'],
        $button
    );
}
echo json_encode($output);
?>