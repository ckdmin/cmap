<?php
// CORS 헤더 설정 (필요에 따라 수정)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// OPTIONS 요청에 대한 응답 처리
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(204); // No Content
    exit;
}

// 실제 호출할 REST API의 URL
$api_url = "https://api.example.com/endpoint";

// 클라이언트로부터 받은 POST 데이터 읽기
$data = file_get_contents('php://input');

// cURL을 사용하여 REST API에 요청을 보냄
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer your-auth-token-here' // 필요 시 인증 토큰 추가
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo json_encode(array('error' => 'cURL error: ' . curl_error($ch)));
} else {
    echo $response; // REST API의 응답을 클라이언트에게 반환
}

curl_close($ch);
?>
