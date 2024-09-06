<?php

$url = "https://qrcode.kakao.com/v1/qr/qrcodes";
$headers = array(
	"Content-Type: application/json",
	"Authorization: Basic a2FrYW9tYXAtbXRkOg=="
);


$ch = curl_init();                                 //curl 초기화
 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
 
$response = curl_exec($ch);
curl_close($ch);

 echo $response;

// return $response;


?>

