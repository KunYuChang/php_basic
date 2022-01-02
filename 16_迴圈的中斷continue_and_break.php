<?php

// 迴圈的中斷語法就是專門用在迴圈上 (while, do while, for, foreach)
// PHP continue 語法上也可以用在 switch，但是特性很奇怪，不會有人真的使用。

$index = 1;

while ($index) {
    echo $index;
    $index++;

    // break 會跳出整個迴圈 
    if ($index > 0) {
        break;
    }
}

echo "end";

?>

<?php


$student_list = [
    ["name" => "小明", "score" => "65"],
    ["name" => "小美", "score" => "90"],
    ["name" => "老王", "score" => "59"],
    ["name" => "大華", "score" => "80"],
];

// 使用 break 情境 : 是否全班都及格? (跳出整個迴圈)
$passFlag = true;
for ($index = 0; $index < count($student_list); $index++) {
    $score = intval($student_list[$index]["score"]);
    if ($score < 60) {
        $passFlag = false;
        break;
    }
}

if ($passFlag) {
    echo "全班及格!";
} else {
    echo "有人不及格!";
}

// 使用 continue 情境 : 列印出及格的同學姓名 (跳過當次)
for ($index = 0; $index < count($student_list); $index++) {
    $score = intval($student_list[$index]["score"]);
    if ($score < 60) {
        echo "分數太低";
        continue;
    }

    if ($score > 100) {
        echo "分數不正常";
        continue;
    }

    echo $student_list[$index]["name"] . "<br>";
}


echo "執行完畢!";

?>


<a href="https://progressbar.tw/posts/194">迴圈的中斷(continue & break)</a>
<br>
<a href="17_函數與回傳值.php"></a>