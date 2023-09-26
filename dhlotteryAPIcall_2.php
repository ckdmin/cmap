<?php
// REST API 엔드포인트 URL
$apiUrl = "https://dhlottery.co.kr/store.do?method=sellerInfo645Result&searchType=3&sltSIDO2=%EA%B2%BD%EA%B8%B0&sltGUGUN2&rtlrSttus=001&nowPage=1";

// CURL 세션 초기화
$ch = curl_init($apiUrl);

// CURL 옵션 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 결과를 문자열로 반환
// 필요한 경우 다른 CURL 옵션 설정
// 예를 들어 POST 요청을 하려면 아래 옵션을 추가할 수 있습니다.
// curl_setopt($ch, CURLOPT_POST, true); // POST 요청 설정
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData)); // 요청 본문 설정 (JSON 데이터)

// 필요한 경우 인증 헤더를 추가할 수 있습니다.
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Authorization: Bearer YOUR_ACCESS_TOKEN',
//     'Content-Type: application/json',
//     // 다른 헤더 추가 가능
// ));

// CURL 요청 실행
$response = curl_exec($ch);

// CURL 세션 종료
curl_close($ch);

if ($response === false) {
    // CURL 요청 실패 시 에러 처리
    echo "CURL 요청 실패: " . curl_error($ch);
} else {
    // CURL 요청 성공 시 응답 출력 또는 처리
    echo "API 응답: " . $response;
}
?>
