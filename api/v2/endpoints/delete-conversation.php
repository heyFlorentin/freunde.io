<?php
// +------------------------------------------------------------------------+
// | @author: Freunde.io
// | @author_url: https://www.freunde.io
// | @author_email: support@freunde.io
// +------------------------------------------------------------------------+
// | Freunde.io - Social Media Made in Germany
// | Copyright (c) 2018 Freunde.io. All rights reserved.
// +------------------------------------------------------------------------+
$response_data = array(
    'api_status' => 400
);
if (empty($_POST['user_id'])) {
    $error_code    = 4;
    $error_message = 'user_id (POST) is missing';
}
if (empty($error_code)) {
    $user_id  = Wo_Secure($_POST['user_id']);
    $recipient_data = Wo_UserData($user_id);
    if (empty($recipient_data)) {
        $error_code    = 6;
        $error_message = 'Recipient user not found';
    } else {
    	$delete = Wo_DeleteConversation($user_id, $wo['user']['user_id']);
    	if ($delete) {
    		$response_data = array(
		        'api_status' => 200,
		        'message' => "Conversation successfully deleted."
		    );
    	}
    }
}