<?php
require_once '/home/weimaredu/www/weimar-center/anet_php_sdk/AuthorizeNet.php'; // The SDK
$url = "http://weimar.org/donate-test/api/";
$api_login_id = '9cB2A5rxx2';
$transaction_key = '52ZB75j7pt7Tzp8U';
$md5_setting = '9cB2A5rxx2'; // Your MD5 Setting
$amount = "5.99";
AuthorizeNetDPM::directPostDemo($url, $api_login_id, $transaction_key, $amount, $md5_setting);
?>