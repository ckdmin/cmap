<?php
// CORS 헤더 설정
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// 클라이언트로부터 받은 POST 데이터를 읽음
$data = file_get_contents('php://input');

// 호출할 실제 REST API의 URL
$api_url = "https://qrcode.kakao.com/v1/qr/qrcodes"; // 여기에 실제 REST API 경로를 작성

// Authorization 헤더에 들어갈 토큰 (예: Bearer 토큰)
$auth_token = "a2FrYW9tYXAtbXRkOg=="; // 실제 API에 맞는 토큰을 설정

// cURL을 사용해 REST API에 POST 요청을 보냄
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Basic ' . $auth_token // Authorization 헤더 추가
));curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo $response; // REST API의 응답을 클라이언트에게 반환
}


curl_close($ch);
?>