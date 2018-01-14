<?php
//判斷地區
    $ch = curl_init();
    $timeout = 5;
    $ip = $_SERVER['HTTP_HOST'];//取得ip
    $url = "http://ip-api.com/php/{$ip}";//傳送ip至ip-api伺服器
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $fileContents = curl_exec($ch); //網站回傳的數據，型態為字串
    curl_close($ch);
?>