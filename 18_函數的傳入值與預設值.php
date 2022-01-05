<?php

// 參數(Parameters) : 常縮寫成params，定義的名稱。
function echoSomething($something)
{
    echo $something;
}

// 引數 (Arguments) : 真正傳進去的值。
echoSomething("Test");

// 我是分隔線-------

function mathFunction($x, $y = 5)
{
    // 參數 $y 如果沒有傳入值，將代入預設值。
    return 2 * $x + 3 * $y + 1;
}

echo mathFunction(10);

?>


<a href="https://progressbar.tw/posts/217">函數的傳入值與預設值</a>
<br>
<a href="19_全域變數與系統函數.php"></a>