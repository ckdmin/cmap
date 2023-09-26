<?php

//$url = "https://dhlottery.co.kr/store.do?method=sellerInfo645Result&searchType=3&sltSIDO2=%EA%B2%BD%EA%B8%B0&sltGUGUN2&rtlrSttus=001&nowPage=".$_GET["PAGENO"];

$url = "https://dhlottery.co.kr/store.do?method=sellerInfo645Result&searchType=3&nowPage=2&sltSIDO2=%EA%B2%BD%EA%B8%B0&sltGUGUN2&rtlrSttus=001"

$ch = curl_init();                                 //curl 초기화

var_dump($url);
print_r($url);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 
$response = curl_exec($ch);
curl_close($ch);

 echo $response;

// return $response;

?>