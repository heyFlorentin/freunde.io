<?php
// +------------------------------------------------------------------------+
// | @author: Freunde.io
// | @author_url: https://www.freunde.io
// | @author_email: support@freunde.io
// +------------------------------------------------------------------------+
// | Freunde.io - Social Media Made in Germany
// | Copyright (c) 2016 Freunde.io. All rights reserved.
// +------------------------------------------------------------------------+
require 'assets/libraries/PayPal/vendor/autoload.php';
$paypal = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    $wo['config']['paypal_id'],
    $wo['config']['paypal_secret']
  )
);
$paypal->setConfig(
    array(
      'mode' => $wo['config']['paypal_mode']
    )
);