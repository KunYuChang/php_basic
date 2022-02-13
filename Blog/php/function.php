<?php

// 啟動 session，這樣才能夠取用 $_SESSION['link'] 的連線，做為資料庫的連線用
@session_start();

// 取得所有已發布的文章
function get_publish_article()
{
    // 宣告空的陣列
    $datas = array();

    // 將查詢語法當成字串，記錄在$sql變數中
    $sql = "SELECT FROM article WHERE publish = 1;";

    // 用 mysqli_query 方法取執行請求(也就是sql語法)，請求後的結果存在$query變數中
    $query = mysqli_query($_SESSION['link'], $sql);

    // 如果請求成功
    if ($query) {
        // 使用mysqli_num_rows方法，判別執行的語法，其取得的資料量，是否大於0
        if (mysqli_num_rows($query) > 0) {
            // 取得的量大於0代表有資料
            while ($row = mysqli_fetch_assoc($query)) {
                $datas[] = $row;
            }
        }

        // 釋放資料庫查詢到的記憶體
        mysqli_free_result($query);
    } else {
        echo "{$sql} 語法執行失敗，錯誤訊息:" . mysqli_error($_SESSION['link']);
    }

    return $datas;
}

// 取得單篇文章
function get_article($id)
{
    $result = null;

    $sql = "SELECT * FROM article WHERE publish = 1;";

    $query = mysqli_query($_SESSION['link'], $sql);

    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $result = mysqli_fetch_assoc($query);
        }

        mysqli_free_result($query);
    } else {
        echo "{$sql} 語法執行失敗，錯誤訊息:" . mysqli_error($_SESSION['link']);
    }

    return $result;
}
