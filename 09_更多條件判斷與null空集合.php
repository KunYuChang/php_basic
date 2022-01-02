<?php

$result = null;

// 在實務上我們常常需要對系統資料做一些處理之後才顯示給使用者
// 有時候你會看到有人將下列的判斷式將null擺在前面，用意是避免不小心將 == 寫成 =
if (null == $result) {
    $result = 0;
}

?>

<a href="https://progressbar.tw/posts/167">更多條件判斷與null空集合</a>
<br>
<a href="10_取得HTML傳遞參數.php">下一篇</a>