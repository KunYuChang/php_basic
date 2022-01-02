<?php

// 基本觀念 : 
// 「10-1_一個HTML_form.html」中的name="值"
// 「10_取得HTML傳遞參數.php」中$_POST ["值"] 
// 這兩個"值"必須完全一致才能被讀取到。

echo "GET recipe 的值是:" . $_GET["recipe"] . "<br>";
echo "POST recipe 的值是:" . $_POST["recipe"] . "<br>";

// 一個簡易搜尋判斷 (實務上通常資料來自於資料庫)
if ($_GET["recipe"] == null) {
    echo "<h1>請到下一頁Form搜尋</h1>";
} else {
    echo "<h1>您搜尋的是:" . $_GET["recipe"] . "</h1>";
    if ($_GET["recipe"] == "香菇雞湯") {
        echo "標題: 阿嬤的香菇雞湯<br>";
        echo "步驟: <br>";
        echo "1: 找一個阿嬤<br>";
        echo "2: 請他幫你煮<br>";
    } else {
        echo "您的要求太過於複雜<br>";
        echo "叫外送可能比較實際一點";
    }
}

?>



<a href="https://progressbar.tw/posts/168">取得HTML傳遞參數</a>
<br>
<a href="11_三元運算子與單行條件判斷.php">下一篇</a>