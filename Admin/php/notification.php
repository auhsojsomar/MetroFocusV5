<?php
    include '../../User/includes/db.php';
    date_default_timezone_set('Asia/Manila');
    $sql = mysqli_query($con,"SELECT * FROM notifications ORDER BY id DESC LIMIT 5");
    $output = '';
    if($_POST['view'] != ''){
        mysqli_query($con,"UPDATE notifications SET view = 1 WHERE view = 0");
    }
    while($row3 = mysqli_fetch_assoc($sql)){
        $user = $row3['user'];
        $sql2 = mysqli_query($con,"SELECT * FROM loginform WHERE username = '$user'");
        $row2 = mysqli_fetch_assoc($sql2);
        $fullname = $row2['firstname'].' '.$row2['lastname'];
        $datecreate = $row3['date_time'];
        $dateago = time_elapsed_string($datecreate);
        if($row3['type'] == 'Reservation'){
            $description = 'Reserved '.$row3['description'].' item';
            $loc = 'reservation.php';
        }
        else if($row3['type'] == 'Appointment'){
            $description = 'Set appointment on '.$row3['description'].'';
            $loc = 'appointment.php';
        }
        $output .= '<li>
                        <a href="'.$loc.'" class="notification-item">
                            <div class="img-col">
                                <div class="img" style="background-image: url("")"></div>
                            </div>
                            <div class="body-col">
                                <p>
                                    <span class="accent">'.$fullname.'</span><br>
                                    <span>'.$description.'</span><br>
                                    <span>'.$dateago.'</span>
                                </p>
                            </div>
                        </a>
                    </li>';
    }
    $sql4 = mysqli_query($con,"SELECT * FROM notifications WHERE view = 0");
    $row4 = mysqli_num_rows($sql4);
    if($row4 < 1){
        $count = null;
    }
    else{
        $count = $row4;
    }

    $finaloutput = array(
        "notification" => $output,
        "count" => $count
    );
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
    echo json_encode($finaloutput);
?>