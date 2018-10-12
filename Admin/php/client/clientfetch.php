<?php
include '../../../User/includes/db.php';
// $output = array();
// $query = "SELECT * FROM loginform  WHERE deleted = 0 AND status = 'User' ORDER BY id DESC";
// $statement = $connection->prepare($query);
// $statement->execute();
// $result = $statement->fetchAll();
// $data = array();
// $filtered_rows = $statement->rowCount();
// foreach($result as $row)
// {
//     $sub_array = array();
//     $sub_array[] = $row["firstname"];
//     $sub_array[] = $row["lastname"];
//     $sub_array[] = $row["username"];
//     $sub_array[] = $row["cnumber"];
//     $sub_array[] = $row["created"];
//     $sub_array[] = '<button style="width:40px;" type="button" name="update" id="'.$row["id"].'" class="button is-info is-small"><i class="fal fa-edit"></i> Edit</button><button style="width:40px;" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
//     $data[] = $sub_array;
// }
// $output = array(
//     "data" => $data
// );
// echo json_encode($output);
$sql = mysqli_query($con,"SELECT * FROM loginform WHERE status = 'User' AND deleted = 0 ORDER BY id DESC");
$output = array('data' => array());
while($row = mysqli_fetch_array($sql)){
    $check = '<input type="checkbox" value='.$row['id'].'>';
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