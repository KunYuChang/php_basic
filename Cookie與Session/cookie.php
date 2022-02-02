<?php

// Cookie 是使用者瀏覽網站時，伺服器留一些小資料在用戶端的電腦上進行資料的暫存，
// 作為下次再訪或者瀏覽過程中取用某些值。
// 設定後，須在下次瀏覽網頁才能使用。


// 設置cookie的方法(變數名稱,變數值,存放時間)
setcookie("myName", "KunYuchang", time() + 60 * 60 * 24);

// 若無設定存放時間，當瀏覽器關閉後，該cookie自動過期。
// setcookie撰寫的位置必須在任何輸出(echo,print_r)之前

// 取得並印出所要的Cookie值
echo $_COOKIE['myName'];

// 清除Cookie，將存放時間改現在，所以下一秒就失效了。
setcookie("myName", "KunYuchang", time());
