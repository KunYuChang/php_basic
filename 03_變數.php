<?php

// 變數是一個容器的概念

// 變數的命名規則
// 前綴號 : 使用錢字符號(dollar sign)表示變數
// 開頭字 : 只能是英文,_
// 識別字 : 只能是英文,數字,_
// 大小寫 : 視為不同

#VARIABLES
/**
 *  - Prefix $
 *  - Start with a letter or an underscore
 *  - Only letters, numbers and underscores
 *  - Case sensitive
 * 
 */

#DATA TYPES
/**
 *  - Strings
 *  - Integers
 *  - Floats
 *  - Booleans
 *  - NULL
 *  - Resource
 *  - Arrays
 *  - Objects
 */

// 變數宣告
$name = 'Zira'; // 字串 String
$age = 20; // 整數 Integer
$isMale = true; // 布林值 Boolean  
$height = 1.85; // 浮點數 Float
$salary = null; // 空值 Null

// 輸出變數型別
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// 判斷是否設置變數
isset($name); // true
isset($address); // false

// 定義常數 (Define Constants)
define('PI', 3.14); // 常數名通常被設置為全大寫，並底線串接變數名稱，大小寫敏感。
define('Greeting', 'Hello Everyone', true); // 透過參數true，使其大小寫不敏感。

?>

<a href="https://progressbar.tw/posts/149">變數 variable</a>
<a href="https://progressbar.tw/posts/154">變數命名與編寫風格</a>
<a href="https://www.php-fig.org/psr/">PHP 標準建議</a>