<?php
	include '../../../User/includes/db.php';
    $id = $_POST['id'];
	$reason = $_POST['message'];
    $sql = mysqli_query($con,"SELECT firstname,cnumber FROM loginform WHERE username = (SELECT username FROM reservation WHERE id = $id AND status != 'Reject')");
    $row = mysqli_fetch_array($sql);
    $firstname = $row[0];
	$cnumber = $row[1];
    $message =  "Hi $firstname!, $reason \n\n --Metro Focus--";

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
		$query = mysqli_query($con,"UPDATE reservation SET status='Reject' WHERE id = $id");
        echo "Message Sent!";
    }
    else{
        echo "Error";
    }
?>