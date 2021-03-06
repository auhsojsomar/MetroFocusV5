<?php
	include '../../../User/includes/db.php';
    $id = $_POST['id'];
    $reason = $_POST['message'];
    $sql = mysqli_query($con,"SELECT firstname,loginform.cnumber,schedule,loginform.username FROM loginform,appointment WHERE appointment.username = loginform.username AND appointment.id = $id AND appointment.status != 'Reject' AND appointment.status != 'Done' AND appointment.status != 'Canceled'");
    $row = mysqli_fetch_array($sql);
    $firstname = $row[0];
    $cnumber = $row[1];
    $date = $row[2];
    $username = $row[3];
    $newdate = date('F j, Y \a\t g:i A',strtotime($date));
    $message =  "Dear $firstname, \n I am very sorry to inform you that your appointment on $newdate has been cancelled, $reason .We sincerely apologize for the inconvenience.\n\n --Metro Focus--";

	require '../sms/autoload.php';
	
    use SMSGatewayMe\Client\ApiClient;
    use SMSGatewayMe\Client\Configuration;
    use SMSGatewayMe\Client\Api\MessageApi;
    use SMSGatewayMe\Client\Model\SendMessageRequest;

    if(!empty($cnumber)){
        $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNzk2MjE5MCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYxNzUxLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.fZ11G2HZ6QvIh2WjaGH63XsWyIBjbRItuuNwIPCfGiU');
        $apiClient = new ApiClient($config);
        $messageClient = new MessageApi($apiClient);

        $sendMessageRequest1 = new SendMessageRequest([
            'phoneNumber' => $cnumber,
            'message' => $message,
            'deviceId' => 102592
        ]);
        $sendMessages = $messageClient->sendMessages([
            $sendMessageRequest1
		]);
		$query = mysqli_query($con,"UPDATE appointment SET status='Reject' WHERE id = $id");
        echo "Message Sent!";
        $user = $_COOKIE['email'];
        date_default_timezone_set('Asia/Manila');
        $dateof = date('n/j/Y g:i A');
        mysqli_query($con,"INSERT INTO activitylogs (name,action,datemod,type,user)VALUES('$username','Reject','$dateof','Appointment','$user')");
    }
    else{
        echo "Error";
    }
?>