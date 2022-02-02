<?php

// 函式 

$student_list = [
    ["name" => "小明", "score" => "65"],
    ["name" => "小美", "score" => "90"],
    ["name" => "老王", "score" => "59"],
    ["name" => "大華", "score" => "80"],
];


// function 要透過 global 才能取得全域 student
function createLiTagStudent($student)
{
    $name = $student["name"];
    $score = $student["score"];
    echo "<li>姓名: $name / 分數: $score</li>";
}

function createUserList($student_list)
{
    // global $student_list;
    echo "<ul>";
    foreach ($student_list as $stu) {
        createLiTagStudent($stu);
    }
    echo "</ul>";
}

createUserList($student_list);

// 我是分隔線 (你看不我~你看不到我~)
$total_seconds = 32583;

function secondsToTime()
{
    global $total_seconds;
    $hours = intval($total_seconds / (60 * 60));
    $minutes = floor($total_seconds / (60) % 60);
    $seconds = intval($total_seconds % 60);
    return array($hours . "小時", $minutes . "分鐘", $seconds . "秒");
}

// PHP 回傳值除了回傳單一值之外也可以回傳陣列。(參考官網)
list($hours, $minutes, $seconds) = secondsToTime();

echo $hours;

// 函數取得全域變數有兩種方法
// (1) 使用 global
// (2) 使用 參數

// Create function to sum all numbers using ...$nums
function allSum(...$nums)
{
    $total = 0;
    foreach ($nums as $num) {
        $total += $num;
    }
    return $total;
}
echo allSum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Arrow functions (PHP 7.4)
function sum(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);

?>


<a href="https://progressbar.tw/posts/216">函數與回傳值</a>
<br>
<a href="18_函數的傳入值與預設值.php"></a>