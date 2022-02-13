<?php

session_start();

// 刪除SESSION元素
unset($_SESSION['name']);

// 刪除整個SESSION
// 刪除伺服器上的session檔，下次存取網頁才會看到session消失了
session_destroy();

// 刪除整個SESSION2
// 將所有session陣列清空，馬上就可以看到session內的陣列都已清空
