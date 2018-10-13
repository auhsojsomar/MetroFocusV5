<?php
    include '../../../User/includes/db.php';
    $type = $_POST['type'];
    if($type == 'Brand'){
        $sql = mysqli_query($con,"SELECT * FROM brand WHERE deleted = 1 ORDER BY id DESC");
        $output = array('data' => array());
        while($row = mysqli_fetch_array($sql)){
            $check = '<input type="checkbox" value="'.$row['id'].'">';
            $button = '<button style="width:50px" type="button" name="restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
            $output['data'][] = array(
                $check,
                $row['brand'],
                $row['date_deleted'],
                $button
            );
        }
        echo json_encode($output);
    }
    else if($type == 'Category'){
        $sql = mysqli_query($con,"SELECT * FROM category WHERE deleted = 1 ORDER BY id DESC");
        $output = array('data' => array());
        while($row = mysqli_fetch_array($sql)){
            $check = '<input type="checkbox" value="'.$row['id'].'">';
            $button = '<button style="width:50px" type="button" name="restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
            $output['data'][] = array(
                $check,
                $row['category'],
                $row['date_deleted'],
                $button
            );
        }
        echo json_encode($output);
    }
    else if($type == 'Parts'){
        $sql = mysqli_query($con,"SELECT * FROM parts WHERE deleted = 1 ORDER BY id DESC");
        $output = array('data' => array());
        while($row = mysqli_fetch_array($sql)){
            $check = '<input type="checkbox" value="'.$row['id'].'">';
            $button = '<button style="width:50px" type="button" name="restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
            $output['data'][] = array(
                $check,
                $row['name'],
                $row['date_deleted'],
                $button
            );
        }
        echo json_encode($output);
    }
    else if($type == 'Accessories'){
        $sql = mysqli_query($con,"SELECT * FROM accessories WHERE deleted = 1 ORDER BY id DESC");
        $output = array('data' => array());
        while($row = mysqli_fetch_array($sql)){
            $check = '<input type="checkbox" value="'.$row['id'].'">';
            $button = '<button style="width:50px" type="button" name="restore" id="'.$row["id"].'" class="button is-warning is-small"><i class="far fa-undo"></i> Restore</button><button style="width:50px" type="button" name="delete" id="'.$row["id"].'" class="button is-danger is-small"><i class="fal fa-trash-alt"></i> Delete</button>';
            $output['data'][] = array(
                $check,
                $row['name'],
                $row['date_deleted'],
                $button
            );
        }
        echo json_encode($output);
    }
?>