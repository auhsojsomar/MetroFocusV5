<?php
    include '../includes/db.php';
    $sql = mysqli_query($con,"SELECT * FROM brand WHERE deleted = 0 ORDER BY brand");
    $output = '';
    while($row = mysqli_fetch_array($sql)){
        $output .= '<div class="field">
                        <input class="is-checkradio" id="'.$row['brand'].'" type="checkbox">
                        <label for="'.$row['brand'].'">'.$row['brand'].'</label>
                    </div>';
    }
    $final = array(
        'brand' => $output
    );
    echo json_encode($final);
?>