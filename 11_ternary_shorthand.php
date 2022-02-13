<a href="https://progressbar.tw/posts/169">三元運算子與單行條件判斷</a>
<?php

$loggedIn = true;

// ? 前情提要 
// 一般的 if else 寫法
if ($loggedIn) {
    echo "You are logged in";
} else {
    echo "You are NOT logged in";
};

// 若要執行程式內容"只有一行"，可以去掉括號。 
// 源自於 C 的寫法、JavaScript 也支援。
if ($loggedIn) echo "You are logged in";
else echo "You are NOT logged in";

// ? 三元運算子 
echo ($loggedIn) ? "You are logged in" : "You are NOT logged in";

// 三元運算子常用的情境 - 對空值進行處理

$result = ($result == null) ? "" : $result;

?>

<div>
    <?php if ($loggedIn) : ?>
        <h1>Welcome User</h1>
    <?php else : ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>