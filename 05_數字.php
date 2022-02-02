<?php

// 數字包含正負整數、浮點數(有小數點的數值)等，數字可以做運算。

// 宣告數字 (Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// 算術運算 (Arithmetic operations
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// 使用數學運算符賦值 (Assignment with math operators
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

// 增量運算符 (Increment operator
echo $a++;
echo ++$a;

// 減量運算符 (Decrement operator
echo $a--;
echo --$a;

// 數字確認函式 (Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// 轉換 (Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
$number = (int)$strNumber;
$number = floatval(9); // 轉浮點數
$number = intval(9.567);  // 轉整數

// 數字函式 (Number functions

# 最常用
round(2.4); // 2
round(2.6); // 3
round(9.564, 2); //取小數點兩位數 9.56

# 取整數但資料型態是浮點數
floor(9.567); // 9
ceil(9.567); // 10

abs(-15);
pow(2, 3);
sqrt(16);
max(2, 3);
min(2, 3);

// 格式化數字 (Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',');

// 使用echo會自動轉型成字串
echo $thisIsInt;

// 包含小數點 = 浮點數 float = Double (PHP裡面是一樣的)
$thisIsFloat = 1.58907312;

// 字串組合
echo "串整數" . 1 . "OK<br>";
echo "串浮點數" . 1.23 . "OK<br>";
# echo "串浮點數".1.23."不OK<br>"; 注意連結號的.跟浮點數必須分開，否則出錯

?>

<a href="https://progressbar.tw/posts/156">數字介紹與處理</a>
<br>
<a href="06_算術運算子.php">下一篇</a>