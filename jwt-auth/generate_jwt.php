<?php
require 'bootstrap.php';

$secret = getenv('SECRET');

$header = json_encode(['typ' => 'JWT', 'alg' => 'hs256']);

$payload = json_encode(['user_id' => 1, 'role' => 'admin', 'exp' => strtotime("+1 day")]);

$base64UrlHeader = base64UrlEncode($header);
$base64UrlPayload = base64UrlEncode($payload);
$signature = hash_hmac('sha256', $base64UrlHeader.".".$base64UrlPayload, $secret, true);
$base64UrlSignature = base64UrlEncode($signature);

$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

echo "Your token: \n" . $jwt . "\n";

?>