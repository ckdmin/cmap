<?php

//$url = "https://dapi.kakao.com/route-affiliate/v2/car.json?x=127.91903257369995,127.92853832244874&y=37.32480788945914,37.31989347606299&routeMode=SHORTEST_REALTIME&routeOption=NONE&inputCoordSystem=WGS84&outputCoordSystem=WGS84";
//$headers = array(
//	"Authorization: KakaoAK 21dbcfabd7944c87f6fbd8390b175389"
//);

$url = "https://dhlottery.co.kr/store.do?method=sellerInfo645Result&searchType=3&sltSIDO2=%EA%B2%BD%EA%B8%B0&sltGUGUN2&rtlrSttus=001&nowPage=1";


$ch = curl_init();                                 //curl 초기화
 
curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HEADER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 
$response = curl_exec($ch);
curl_close($ch);

 echo $response;

// return $response;

?>