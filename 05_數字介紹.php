<?php

// 整數 integer 
$thisIsInt = 10; // 正整數
$thisIsInt2 = -37; // 負整數
var_dump($thisIsInt);

// 使用echo會自動轉型成字串
echo $thisIsInt;

// 整數的16進位表示法
$thisIsHexInt = 0xff;
var_dump($thisIsHexInt);

// 包含小數點 = 浮點數 float = Double (PHP裡面是一樣的)
$thisIsFloat = 1.58907312;

// Float 處理

// ** 最常用 **
$thisIsFloat3 = round(9.564, 2); //取小數點兩位數 9.56

// 這兩個處理比較"特別"，因為會取整數但資料型態是浮點數 (與JS不同)
$thisIsFloat3 = ceil(9.567); // 10
$thisIsFloat3 = floor(9.567); // 9

// 型別轉換
$thisIsFloat3 = intval(9.567); // 轉整數
$thisIsFloat3 = floatval(9); // 轉浮點數

// 字串組合

// 字串與整數
echo "串整數" . 1 . "OK<br>";
echo "串浮點數" . 1.23 . "OK<br>";
// echo "串浮點數".1.23."不OK<br>"; 注意連結號的.跟浮點數必須分開，否則出錯

?>

<a href="https://progressbar.tw/posts/156">數字介紹與處理</a>
<br>
<a href="06_算術運算子.php">下一篇</a>