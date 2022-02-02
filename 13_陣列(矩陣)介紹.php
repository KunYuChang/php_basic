<?php

// 1. 值裡不一定只能放字串，也可以放數字、物件(object)
// 2. 一個陣列可以儲放無限個值(實際上不可能，畢竟你的記憶體空間不是無上限的)
// 3. 在PHP裡面陣列(array)與雜湊(hash table)是同一件事情

// ? 索引陣列 Index Array
$a = array('HTML', 'CSS', 'JS', 'PHP', 2022); // 早期的陣列宣告方式
$b = ['HTML', 'CSS', 'JS', 'PHP', 2022]; // 現代的陣列宣告方式 (short array syntax)

// 輸出整個陣列 (簡易型式)
echo '<pre>';
print_r($a);
echo '</pre>';

// 輸出整個陣列 (詳細型式)
echo '<pre>';
var_dump($a);
echo '</pre>';

// 讀取陣列元素 (Get element by index)
echo $a[0] . '<br>';

// 設置陣列元素 (Set element by index)
$a[2] = 'TS';

// 加入元素 (Append element)
$a[] = 'Project';

// 陣列元素數量 (Print the length of the array)
echo count($a);

// 確認陣列是否包含索引中元素
isset($a[3]);

// Desturturing 拆解
[$html, $css, $php] = $a;

// 陣列元素插入與刪除
array_push($a, 'PowerBuilder'); // 於陣列尾插入元素
array_pop($a); // 於陣列尾刪除元素
array_unshift($a, 'SQL'); // 於陣列頭插入元素
array_shift($a); // 於陣列頭刪除元素

// 參數(陣列,插入位置,要不要取代 0=不取代 1=取代,插入的內容) 
array_splice($array2, 2, 0, ["new"]); // 從中間插入值
array_splice($array2, 2, 1); // 可以利用這種方式來移除值 (並且會重新排序)

unset($array2[1]); // 移除值 (注意:陣列索引不會重新排序--應避免使用)
$array2 = array_values($array2); // 移除key並且按順序給予索引

// 補充觀念 : 傳統意義上的雜湊表是沒有順序的，但是PHP的關聯陣列是有順序性的。

// 字串拆成陣列 (Split the string into an array
$string = "Banana,Apple,Peach";
var_dump(explode(",", $string));

// 陣列組成字串 (Combine array elements into string
echo implode("&", $fruits);

// 確認陣列是否包含指定元素
$os = array("Mac", "NT", "Irix", "Linux");

if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}

// 在陣列中搜尋元素的索引值 (Search element index in the array
$data = array("FaceBook", "Google", "Yahoo");
$key = array_search("Google", $data);
echo "Key值為：" . $key;

// Merge two arrays
$fruits = ["Apple", "Banana"];
$vegetables = ["Potato", "cucumber"];

$merge = array_merge($fruits, $vegetables);
$merge = [...$fruits, ...$vegetables];


// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits);


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

// 取值與設值
echo $person['name'] . '<br>'; // Get element by key
$person['channel'] = 'TraversyMedia'; // Set element by key
['program' => $language, 'database' => $data] = $b; // Desturturing 拆解


// 在現代前後端分離架構中會使用!
echo json_encode($array2); // 轉成JSON格式

##########################################################
# 判斷關聯陣列元素是否存在?
##########################################################

// 基本寫法
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

// 1. PHP 7 以前 可以使用 isset + 三元運算子 (Ternary Operator)
$person['address'] = isset($person['address']) ? $person['address'] : 'unknown';

// 2. PHP 7 以後可以使用 ?? 空值合併運算子 (Null Coalesce Operator) 可以不用多判斷isset
$person['address'] = $person['address'] ?? 'unknown';

// 3. PHP 7.4 以後可以使用 ??= 空值合併並賦值運算子 (Null Coalesce Assignment Operator)
$person['address'] ??= 'unknown';


// 顯示關聯陣列
var_dump(array_keys($person)); // 顯示陣列的鍵
var_dump(array_values($person)); // 顯示陣列的值


// 陣列排序
ksort($person); // keys
asort($person); // values


?>

<a href="https://progressbar.tw/posts/174">陣列 Array (矩陣)介紹</a>
<a href="https://progressbar.tw/posts/175">陣列的新增與刪除</a>
<a href="https://progressbar.tw/posts/176">陣列與迴圈的關係</a>
<br>
<a href="14_while&do-while與遞增遞減運算子.php">下一篇</a>