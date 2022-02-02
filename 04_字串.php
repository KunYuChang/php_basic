<?php
$hi = 'hello';
$learning = 'php';
$teacher = '梁浩賢';
$occupation = "全端網站開發。";

// 跳脫字元 (Escape character)
echo "<h2>我想打出\"\"號</h2>";
echo "<h2>我想打出\$號</h2>";

// 字串連接 (String concatenation)
echo "<h2>$hi.", ".$learning</h2>";

// 輸出變數雙引號和單引號區別
// ❌ PHP 單引號 : 不會呈現變數內容，會將該變數名稱當成字串輸出。
// ⭕ PHP 雙引號 : 可以夾帶變數，會將該變數名稱當成字串輸出。
// 若沒有用{}包起來，有可能會出現錯誤，因為變數後面加字串，會導致統判斷錯誤。
echo "<h2>跟$teacher 學習$learning</h2>";
echo '<h2>跟$teacher 學習$learning</h2>';

// 常見 PHP 字串功能 (內建函式)
echo "字串長度: " . strlen("Hello");
echo "字串長度: " . mb_strlen("在學Hello", 'utf-8');
echo substr("Hello", 0, 2);
echo mb_substr("全端網站開發", 0, 2, "utf-8");

// 使用 PHP 列印的時候，要注意單雙引號的使用
echo '<img src="images/my_dog.jpg">';
echo "<img src='images/my_dog.jpg'>";

// 大小寫轉換
echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
echo 'Upper case:' . strtoupper($name) . '<br/>';
echo 'Lower case:' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
echo '<hr/>';

// 重覆、擷取、位置、長度、取代
echo '重覆輸出字串: ' . str_repeat('R', 10) . '<br/>';
echo '獲取子字串: ' . substr($name, 3, 5) . '<br/>';
echo '取得字串索位置: ' . strpos($name, 'w') . '<br/>';
echo '取得字串索位置(忽略大小寫): ' . stripos($name, 'w') . '<br/>';
echo '取得字串長度:' . strlen($name) . '<br/>';
echo '字串取代:' . str_replace('World', 'PHP', $string);
echo '字串取代(忽略大小寫):' . str_ireplace('world', 'PHP', $string);

// 去除空白
echo 'Trim spaces on both sides: ' . "Hello" . trim("   World   ") . "!" . "<br/>";
echo 'Trim spaces to the left: ' . "Hello" . ltrim("   World   ") . "!" . "<br/>";
echo 'Trim spaces to the right: ' . "Hello" . rtrim("   World   ") . "!" . "<br/>";
echo '<hr/>';


// PHP 除了使用 echo 還可以使用 print 來輸出內容，但是 print 效能較差、限制較多 

?>

<a href="https://progressbar.tw/posts/155">字串 String</a>
<br>
<a href="05_數字介紹.php">下一篇</a>