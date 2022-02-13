<?php

// 變數因為有作用域(有效區間)，因此需要知道跨區間的用法。
// PHP function 是區域作用域，可以使用幾種方式拿到全域變數。
// 1. 函數裡使用 global，但是通常不太喜歡用，因為寫起來的負擔沒有比較輕。
// 2. 使用 $GLOBALS，但是不太好，因為整個PHP程式都可以使用。
// 3. 使用常數


$br = "<br>";
$GLOBALS["br"] = "<br>";
const BR = "<br>";
define(BR, "<br>"); // 比較傳統的常數宣告法

echo $_GET["value"];

function printNumber($number)
{
    global $br;
    echo "{$number}{$br}";

    $newNumber = $number * 2;
    echo "{$newNumber}" . BR; //常數只能用連接字串的方式來處理
}

function printEnd()
{
    global $br;
    echo "----End----{$br}";
}

printNumber(10);
printEnd();

?>


<a href="https://progressbar.tw/posts/218">全域變數與系統函數</a>