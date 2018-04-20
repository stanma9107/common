<?php
    $dbhost = '127.0.0.1';     //資料庫位置
    $dbuser = 'mysql_user';    //使用者名稱
    $dbpass = 'mysql_password';   //使用者密碼
    $dbname = 'mysql_databaseName';   //資料庫名稱
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        echo 'Failed';
    }
    mysql_query("SET NAMES 'utf8'");
    $sql = "SELECT COUNT(*) as total FROM `FileList` WHERE `class` = 0;";
    $result = mysql_query($sql) or die('MySQL query error');
    while($row = mysql_fetch_array($result)){
        echo $row['name']; //輸出name欄位中的資料
    }
?>
