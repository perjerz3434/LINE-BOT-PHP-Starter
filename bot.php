<?php
$access_token = 'RNc/KyuURWcMcZjQF+1NiAVuZOcglkPaWn6Cvqew42cEV8+on9oZBIrJTh/I0f6vuPZfEYnBw1i8N1zDaKTjICQjoB1t0EG/9VdqHV6b4ZZMVeqInxB8K2pHc8AlMUPV4dlp2eHbqjlc7kpzffku8wdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>

curl -X GET \
-H 'Authorization: Bearer {RNc/KyuURWcMcZjQF+1NiAVuZOcglkPaWn6Cvqew42cEV8+on9oZBIrJTh/I0f6vuPZfEYnBw1i8N1zDaKTjICQjoB1t0EG/9VdqHV6b4ZZMVeqInxB8K2pHc8AlMUPV4dlp2eHbqjlc7kpzffku8wdB04t89/1O/w1cDnyilFU=}' \
https://api.line.me/v1/oauth/verify