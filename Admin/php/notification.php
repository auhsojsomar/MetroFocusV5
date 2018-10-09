<?php
    include '../../User/includes/db.php';
    $sql = mysqli_query($con,"SELECT * FROM notifications");
    $output = '';
    while($row3 = mysqli_fetch_assoc($sql)){
        $user = $row3['user'];
        $sql2 = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user'");
        $row2 = mysqli_fetch_assoc($sql2);
        $fullname = $row2['firstname'].' '.$row2['lastname'];
        $datecreate = $row3['date_time'];
        $date = date("n/j/Y",strtotime($datecreate));
        $time = date("g:i A",strtotime($datecreate));
        if($row3['type'] == 'Reservation'){
            $description = 'Reserved '.$row3['description'].' item';
        }
        else if($row3['type'] == 'Appointment'){
            $description = 'Set appointment on '.$row3['description'].'';
        }
        $output .= '<li>
                        <a href="#" class="notification-item">
                            <div class="img-col">
                                <div class="img" style="background-image: url("")"></div>
                            </div>
                            <div class="body-col">
                                <p>
                                    <span class="accent">'.$fullname.'</span><br>
                                    <span>'.$description.'</span><br>
                                    <span>'.$date.' at '.$time.'</span>
                                </p>
                            </div>
                        </a>
                    </li>';
    }
    $sql4 = mysqli_query($con,"SELECT * FROM notifications WHERE view = 0");
    $row4 = mysqli_num_rows($sql4);

    $finaloutput = array(
        "notification" => $output,
        "count" => $row4
    );

    echo json_encode($finaloutput);
?>