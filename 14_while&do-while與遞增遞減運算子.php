<?php
// 關於 flag 變數名的小典故來自於賽車或紅綠燈會有人拿著旗來表示通行。
$flag = true;

// 條件成立，執行無限次，程式沒寫好就可能產生無窮迴圈。
while ($flag) {
    echo "<h1>Hi </h1>";

    $flag = false; // 將條件設置為不成立，結束迴圈。
}
?>

<?php
// 寫法1
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    if ($flag == 0) {
        $flag = false;
    }
}
?>

<?php
// 寫法2
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    if ($flag == 0) $flag = false;
}
?>

<?php
// 寫法3
$count = 3;
$flag = true;

while ($flag) {
    echo "count:" . $count . "<br>";
    $count = $count - 1;
    $flag = ($flag != 0);
}
?>

<?php
// 寫法4
$count = 3;

while ($count != 0) {
    echo "count:" . $count . "<br>";
    $count -= 1;
}

// 補充說明 :
// (1) 以上四種寫法依程度不同去使用。
//     通常來說新手偏好比較容易看的寫法、老手偏好簡潔的寫法。
// (2) 所有的範例程式碼的邏輯要思考過，不然變動後可能會出現bug，
//     例如改成$count -= 2，就會產生負值並無法跳離無窮迴圈，改成$count >0 較好
?>

<?php

$array = ["沒有", "什麼", "能夠阻擋"];

$count = count($array);
$index = 0;

while ($count--) {
    echo $array[$index] . "<br>";

    $index++;
}

// 由於count是由大到小，但我們是想要"正序"列印出來，所以設置index來輔助達成這件事。
// 由於正序這個需求實在太常見，因此在C語言就產生了一個"語法糖"是"for loop"。

?>

<?php

// 先執行一次再進行while判斷，這個語法在現今程式設計中已經較少看到了。
do {
    echo $array[$index] . "<br>";
} while ($count--);

?>


<a href="https://progressbar.tw/posts/192">while 與 do-while迴圈，補充遞增遞減運算子</a>