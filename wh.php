<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('F0oLgnfOnTKNmceloGRmDAIErcJKBQZKEiYXMHbdhqwsUlZiDD38TivpbCTdN0jQuAoIxho1EMxcTUmEx2qMs8eOmMUad+/D/Bvihu+3SPNDNCY9d3GLqxAxQk+uV7SXGUPa1I1hMgNUeNhpMPencAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'd04163fe826d2617bad0770ddc99478f']);
$response = $bot->getMessageContent('U920f3957cf4902cfb155d6bb0d3a2a68');
if ($response->isSucceeded()) {
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
} else {
    error_log($response->getHTTPStatus() . ' ' . $response->getRawBody());
}
?>
