<?php

// 載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇 SELECT，列出資料表的資料</title>
</head>

<body>
    <!-- div 類別為 container-fluid 代表是滿版的區塊 -->
    <div class="container-fluid">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">SELECT 查詢</h2>
            </div>
        </div>
    </div>

    <h3>執行結果</h3>
    <?php
    // 定義一個 $datas 陣列變數，準備要放查詢的資料
    $datas = array();

    // 將查詢語法當成字串，記錄在$sql變數中
    $sql = "SELECT * FROM `user`;";

    // 用mysqli_query 方法取執行請求 (也就是sql語法)，請求後的結果存在 $result 變數中
    $result = mysqli_query($link, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // 取得的量大於0代表有資料
            // mysqli_fetch_assoc 方法取得 一筆值
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }
        }

        // 釋放資料庫查詢到的記憶體
        mysqli_free_result($result);
    } else {
        echo "${sql} 語法執行失敗，錯誤訊息:" . mysqli_error($link);
    }

    if (!empty($datas)) {
        print_r($datas);
    }
    ?>


</body>

</html>