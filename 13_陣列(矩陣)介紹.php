<?php

// 1. 值裡不一定只能放字串，也可以放數字、物件(object)
// 2. 一個陣列可以儲放無限個值(實際上不可能，畢竟你的記憶體空間不是無上限的)
// 3. 在PHP裡面陣列(array)與雜湊(hash table)是同一件事情

$a = array('HTML', 'CSS', 'JS', 'PHP', 2021);
$b = ['HTML', 'CSS', 'JS', 'PHP', 2021];

// Desturturing 拆解
[$html, $css, $php] = $a;

echo '<pre>';
var_dump($a);
echo '</pre>';

echo '<pre>';
print_r($a);
echo '</pre>';

echo $a[0] . '<br>';
echo $a[1] . '<br>';
echo $a[2] . '<br>';
echo $a[3] . '<br>';
echo $a[4] . '<br>';

echo count($a);

// ? 關聯陣列 Associative array

// 這是一種 key-value store 鍵值儲存的行為
// 其他程式語言不會此行為設計於陣列型態之中
// hash table 雜湊表 : Ruby on Rails, Perl
// Dictionary 字典 : Python, Object C, Swift
// Object 物件 : JavaScript  

$b = array(
    'name' => 'Ho Yin',
    'lesson' => 5,
    'program' => 'php',
    'database' => 'MySQL'
);

// echo '<pre>';
// var_dump($b);
// echo '</pre>';

echo $b['name'] . '<br>';
echo $b['lesson'] . '<br>';
echo $b['program'] . '<br>';
echo $b['database'] . '<br>';

// Desturturing 拆解
['program' => $language, 'database' => $data] = $b;

// ? 陣列的新增與刪除

$array2 = ['Progress', 'Bar', 'TW'];

array_push($array2, "new"); // 插入值 到陣列的最後面
array_pop($array2, "new"); // 刪除值 從陣列的最後面

// 參數(陣列,插入位置,要不要取代 0=不取代 1=取代,插入的內容) 
array_splice($array2, 2, 0, ["new"]); // 從中間插入值
array_splice($array2, 2, 1); // 可以利用這種方式來移除值 (並且會重新排序)

unset($array2[1]); // 移除值 (注意:陣列索引不會重新排序--應避免使用)
$array2 = array_values($array2); // 移除key並且按順序給予索引

// 補充觀念 : 傳統意義上的雜湊表是沒有順序的，但是PHP的關聯陣列是有順序性的。

// 在現代前後端分離架構中會使用!
echo json_encode($array2) // 轉成JSON格式

?>

<a href="https://progressbar.tw/posts/174">陣列 Array (矩陣)介紹</a>
<a href="https://progressbar.tw/posts/175">陣列的新增與刪除</a>
<a href="https://progressbar.tw/posts/176">陣列與迴圈的關係</a>
<br>
<a href="14_while&do-while與遞增遞減運算子.php">下一篇</a>