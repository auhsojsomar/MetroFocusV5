<?php
    include "../../Admin/php/sms/autoload.php";
    $clients = new SMSGatewayMe\Client\ClientProvider("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzODc1NDQ0NiwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYxNzUxLCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.v273RT06lbu3TyhDSKhWZ5v_HAfQAc-scatYjayMKQw");
    $sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
        'phoneNumber' => $cn, 'message' => 'Your verification code is: '.$rand." \n\n --Metro Focus--", 'deviceId' => 102592
    ]);
    $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
?>