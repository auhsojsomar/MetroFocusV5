<?php 
	include '../includes/db.php';
	session_start();
	$date = date('F d, Y');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cn = $_POST['cnum'];
	$password = md5($_POST['password']);
	$rand = rand(100000,999999);
	if($sql = mysqli_query($con,"INSERT INTO loginform (firstname,lastname,username,password,cnumber,created,verification)VALUES('$fname','$lname','$email','$password','$cn','$date','$rand')")){
		$_SESSION['user'] = $email;
		echo "Success";
	}
	require '../../Admin/php/sms/autoload.php';
        
    use SMSGatewayMe\Client\ApiClient;
    use SMSGatewayMe\Client\Configuration;
    use SMSGatewayMe\Client\Api\MessageApi;
    use SMSGatewayMe\Client\Model\SendMessageRequest;

    $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNzk2MjE5MCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYxNzUxLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.fZ11G2HZ6QvIh2WjaGH63XsWyIBjbRItuuNwIPCfGiU');
        $apiClient = new ApiClient($config);
        $messageClient = new MessageApi($apiClient);

        $sendMessageRequest1 = new SendMessageRequest([
            'phoneNumber' => $cnum,
            'message' => 'Your verification code is:'.$rand,
            'deviceId' => 102592
        ]);
        $sendMessages = $messageClient->sendMessages([
            $sendMessageRequest1
        ]);
        echo "Message Sent!";
 ?>