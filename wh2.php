<?php
// $channelSecret = 'd04163fe826d2617bad0770ddc99478f'; // Channel secret string
// $httpRequestBody = 'test'; // Request body string
// $hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
// $signature = base64_encode($hash);
// Compare x-line-signature request header string and the signature

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('F0oLgnfOnTKNmceloGRmDAIErcJKBQZKEiYXMHbdhqwsUlZiDD38TivpbCTdN0jQuAoIxho1EMxcTUmEx2qMs8eOmMUad+/D/Bvihu+3SPNDNCY9d3GLqxAxQk+uV7SXGUPa1I1hMgNUeNhpMPencAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd04163fe826d2617bad0770ddc99478f']);
$response = $bot->getMessageContent('1579594660');
if ($response->isSucceeded()) {
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
} else {
    error_log($response->getHTTPStatus() . ' ' . $response->getRawBody());
}
?>
