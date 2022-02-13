<?php

// 參數(Parameters) : 常縮寫成params，定義的名稱。
function echoSomething($something)
{
    echo $something;
}

// 引數 (Arguments) : 真正傳進去的值。
echoSomething("Test");

###############################################################

// Return Value
function mathFunction($x, $y = 5)
{
    // 參數 $y 如果沒有傳入值，將代入預設值。
    return 2 * $x + 3 * $y + 1;
}

// 如果參數有兩個且沒有設置預設值，只傳入一個引數，執行會報錯。
echo mathFunction(10);

###############################################################

// By Reference 

$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 5;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";


?>


<a href="https://progressbar.tw/posts/217">函數的傳入值與預設值</a>