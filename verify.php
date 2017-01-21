<?php
$access_token = 'oR4qtvyqiDUpP+6SoIj1dN3X+SbCqzmKleP2fCyPhYJ6TRxMvq41oW/ZOo/t9oWPkt5sd9NYc9qMa5vmXcWRyGusZ+JRKvvzyT7/wDJSyLbu93FDkwyu4QFhfmQ2V9pDqF9XLj3pgwxHykliNAdEeQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;