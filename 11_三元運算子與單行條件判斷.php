<?php

$result = true;

// ? 前情提要 
// 一般的 if else 寫法
if ($result) {
    echo "真<br>";
} else {
    echo "假<br>";
};

// 若要執行程式內容"只有一行"，可以去掉括號。 
// 源自於 C 的寫法、JavaScript 也支援。
if ($result) echo "真<br>";
else echo "假<br>";

// ? 三元運算子 
echo ($result == true) ? "真<br>" : "假<br>";

// 三元運算子常用的情境 - 對空值進行處理

$result = ($result == null) ? "" : $result;

?>

<a href="https://progressbar.tw/posts/169">三元運算子與單行條件判斷</a>
<br>
<a href="12_Switch-case條件判斷.php">下一篇</a>