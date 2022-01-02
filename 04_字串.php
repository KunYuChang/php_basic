<?php
$hi = 'hello';
$learning = 'php';
$teacher = '梁浩賢';
$occupation = "全端網站開發。";

// 跳脫字元 (Escape character)
echo "<h2>我想打出\"\"號</h2>";
echo "<h2>我想打出\$號</h2>";

// 字串連接
echo "<h2>$hi.", ".$learning</h2>";

// 輸出變數雙引號和單引號區別
echo "<h2>跟$teacher 學習$learning</h2>";
echo '<h2>跟$teacher 學習$learning</h2>';

// 常見 PHP 字串功能
echo "字串長度: " . strlen("Hello");
echo "字串長度: " . mb_strlen("在學Hello", 'utf-8');
echo substr("Hello", 0, 2);
echo mb_substr("全端網站開發", 0, 2, "utf-8");

// PHP 除了使用 echo 還可以使用 print 來輸出內容，但是 print 效能較差、限制較多 

?>

<a href="https://progressbar.tw/posts/155">字串 String</a>
<br>
<a href="05_數字介紹.php">下一篇</a>