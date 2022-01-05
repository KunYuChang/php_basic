<?php

$students = [
    [
        "姓名" => "小明",
        "數學成績" => 30,
        "英文成績" => 20,
        "歷史成績" => 91,
    ],
    [
        "姓名" => "老王",
        "數學成績" => 89,
        "英文成績" => 82,
        "歷史成績" => 83,
    ],
    [
        "姓名" => "小美",
        "數學成績" => 65,
        "英文成績" => 99,
        "歷史成績" => 87,
    ],
];

// 巢狀迴圈常用來製作表格，但因為巢狀迴圈在維護上比較辛苦，
// 通常喜歡用 function 來讓程式碼變得更好看懂。

function createRow($student)
{
    echo "<tr>";
    foreach ($student as $key => $value) {
        echo "<td>";
        echo "{$value}";
        echo "</td>";
    }
    echo "</tr>";
}

function createTableHead($firstRow)
{
    echo "<thead>";
    echo "<tr>";
    foreach ($firstRow as $key => $value) {
        echo "<th>";
        echo $key;
        echo "</th>";
    }
    echo "</tr>";
    echo "</thead>";
}

function createTable($students)
{
    if (count($students) < 1) {
        return;
    }

    echo "<table border=1>";
    createTableHead($students[0]);
    echo "<tbody>";
    foreach ($students as $student) {
        createRow($student);
    }
    echo "</tbody>";
    echo "</table>";
}

createTable($students);
?>


<a href="https://progressbar.tw/posts/219">巢狀迴圈</a>
<br>
<a href="21_Class類別與Object.php"></a>