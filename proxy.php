<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if (!isset($_GET['hcode'])) {
    echo json_encode(["error" => "hcode parameter is required"]);
    exit;
}

$hcode = $_GET['hcode'];
$apiUrl = "https://map.kakao.com/api/dapi/shape?outputCoordSystem=WGS84&hcode=" . $hcode;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  // 리디렉션 자동 처리
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // SSL 인증 무시 (테스트용)
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);
echo $response;
?>
