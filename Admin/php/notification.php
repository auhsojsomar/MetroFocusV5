<?php
    include '../../User/includes/db.php';
    $sql = mysqli_query($con,"SELECT * FROM notifications");
    $row = mysqli_fetch_array($sql);
    $user = $row['user'];
    $sql2 = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user'");
    $row2 = mysqli_fetch_array($sql2);
    date_default_timezone_set('Asia/Manila');
    $date = date('n/j/Y g:i A');
    $output = '';
    while($row3 = mysqli_fetch_array($sql)){
        $fullname = $row2['firstname'] .' '. $row2['lastname'];
        $dateon = $row3['date_time'];
        if($row3['type'] == 'Reservation'){
            $description = 'Reserve '.$row3['description'].' item';
        }
        if($row3['type'] == 'Appointment'){
            $description = 'Set appointment on '.$row3['description'].'';
        }
        $output .= '<li>
                        <a href="#" class="notification-item">
                            <div class="img-col">
                                <div class="img" style="background-image: url("")"></div>
                            </div>
                            <div class="body-col">
                                <p>
                                    <span class="accent">'.$fullname.'</span><br />
                                    <span>'.$description.'</span><br />
                                    <span>'.$dateon.'</span>
                                </p>
                            </div>
                        </a>
                    </li>';
    }
    $sql3 = mysqli_query($con,"SELECT * FROM notifications WHERE view = 0");
    $row3 = mysqli_num_rows($sql3);
    $count = $row3;

    $output2 = array(
        "notification" => $output,
        "count" => $count
    );

    echo json_encode($output2);
?>