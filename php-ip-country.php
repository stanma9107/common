<?php
//判斷地區
    $ch = curl_init();
    $timeout = 5;
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
  $ip=$_SERVER['REMOTE_ADDR'];
} //取得使用者ip進行區域判斷
    $url = "http://ip-api.com/php/{$ip}";//傳送ip至ip-api伺服器
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $fileContents = curl_exec($ch); //網站回傳的數據，型態為字串
    curl_close($ch);
?>