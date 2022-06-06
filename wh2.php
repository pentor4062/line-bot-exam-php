<?php
$channelSecret = 'd04163fe826d2617bad0770ddc99478f'; // Channel secret string
$httpRequestBody = 'test'; // Request body string
$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);
// Compare x-line-signature request header string and the signature
?>
