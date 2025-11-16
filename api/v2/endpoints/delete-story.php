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
if (empty($_POST['story_id'])) {
    $error_code    = 4;
    $error_message = 'story_id (POST) is missing';
}
if (empty($error_code)) {
    $story_id         = Wo_Secure($_POST['story_id']);
    $delete     = Wo_DeleteStatus($story_id);
    if ($delete) {
        $response_data = array(
            'api_status' => 200,
            'message' => "Story #$story_id successfully deleted."
        );
    }
}