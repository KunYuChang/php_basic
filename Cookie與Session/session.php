<?php
// session 資料暫存

// session 是使用者瀏覽網站時，將一些小資料記錄在伺服器上進行資訊的暫存，作為下次再訪時或者瀏覽過程中取用某些值。

// 存放時間依伺服器中php.ini session timeout 設定的時間而定 
// session設定後馬上可以取用 

// 開始啟用session
session_start();

// 設定session變數與值
$_SESSION['myName'] = '蔡承洋';

// 取用session變數
echo $_SESSION['myName'];

// session 還沒過期或清除之前都可以取用

// 清除session方法1
// 刪除伺服器上的session檔，下次存取網頁才會看到session消失了
session_destroy();

// 清除session方法2
// 將所有session陣列清空，馬上就可以看到session內的陣列都已清空
?>

<?php

// 帳號登入範例

// 啟動 session
session_start();

// 假設的有效會員帳號
$db_user = "stust";
$db_password = "stust1234";

// 使用 isset 判別有沒有此變數可以使用
if (isset($_POST['username']) && isset($_POST['password'])) {
    // 
}
