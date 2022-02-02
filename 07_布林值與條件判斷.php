<?php

// Conditionals

$a = TRUE;
$b = FALSE;
$c = 1;
$d = 0;

var_dump('abc');
var_dump(1);
var_dump(2.4);

// echo只能對字串做處理，所以當遇到數值會將型別自動轉成字串。
// 也就是說PHP會把true轉成1，遇到false會轉成空字串(“”)。

if ($a) {
    echo '真';
} else {
    echo '假';
};

// if else 簡短寫法
$result = $a > $b ? $a : $b;
echo $result;

// 鬆散比對與嚴格比對
$age = 20;
$age == 20;   // true
$age == '20'; // true
$age === 20; // true
$age === '20'; // false

// if AND
if ($age > 30 && $salary < 30000) {
    echo "日子過得艱辛";
}

// if OR
if ($age > 60 || $salary === 100000) {
    echo "需要給予尊重";
}

// 三元運算子
echo $age < 18 ? '未成年' : '成年';

// 貓王運算子 (Elvis Operator) 三元運算子的簡短版本
$myAge = $age ?: 18; // 如果變數存在用原值，如果不存在用18。

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';


?>

<a href="https://progressbar.tw/posts/158">布林值與條件判斷</a>