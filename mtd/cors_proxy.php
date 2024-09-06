<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// 서버가 POST 요청만 허용하도록 설정 (다른 메서드는 거부)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    echo $data;
} else {
    http_response_code(405);  // Method Not Allowed
    echo json_encode(["error" => "Method Not Allowed"]);
}
?>
