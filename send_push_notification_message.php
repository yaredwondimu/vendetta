<?php

	require_once('loader.php');
	
	$gcmRegID    = $_GET["regId"]; // GCM Registration ID got from device
    $pushMessage = $_GET["message"];
	
	if (isset($gcmRegID) && isset($pushMessage)) {
                  
        $registatoin_ids = array($gcmRegID);
        $message = array("price" => $pushMessage);
     
        $result = sendPushNotificaiton($registatoin_ids, $message);
		
        echo $result;
    }

?>