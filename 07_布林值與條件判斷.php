<?php

$a = TRUE;
$b = FALSE;
$c = 1;
$d = 0;

var_dump('abc');
var_dump(1);
var_dump(2.4);

// echo只能對字串做處理，所以當遇到數值會將型別自動轉成字串。
// 也就是說PHP會把true轉成1，遇到false會轉成空字串(“”)。

if ($a) {
    echo '真';
} else {
    echo '假';
};

// if else 簡短寫法
$result = $a > $b ? $a : $b;
echo $result;



?>

<a href="https://progressbar.tw/posts/158">布林值與條件判斷</a>
<br>
<a href="08_比較與邏輯運算子.php">下一篇</a>