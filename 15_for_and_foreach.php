<?php

$array = ["小明", "老王", "小美"];

// ? 前情提要 (使用while)
$index = 0;
while ($index < count($array)) {
    echo "姓名 :" . $array[$index] . "<br>";
    $index++;
}

// ? 使用 for loop 更為簡潔
// 對比之下，其實就可以出來"for loop"是"while loop"的語法糖
// for 條件式裡面進行宣告在某些程式語言是不行的 (例如C語言)
for ($index = 0; $index < count($array); $index++) {
    echo "姓名 :" . $array[$index] . "<br>";
}


$students = [
    [
        "姓名" => '小明',
        "數學成績" => 90,
    ],
    [
        "姓名" => '老王',
        "數學成績" => 90,
    ],
    [
        "姓名" => '小美',
        "數學成績" => 96,
    ],
];

// for loop 現代常見的資料處理"方法"
for ($index = 0; $index < count($students); $index++) {
    $student = $students[$index];
    echo "姓名 : " . $student["姓名"] . "<br>";
    echo "數學成績 : " . $student["數學成績"] . "<br>";
}

// 由於上述的"方法"太常見，於是又設計出一個語法糖"foreach"
foreach ($students as $student) {
    echo "姓名 : " . $student["姓名"] . "<br>";
    echo "數學成績 : " . $student["數學成績"] . "<br>";
}

?>


<a href="https://progressbar.tw/posts/193">for 與 foreach迴圈</a>
<br>
<a href="16_迴圈的中斷continue_and_break.php"></a>