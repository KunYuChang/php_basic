<?php

// 設定Cookie
setcookie("username", "新手玩家", time() + 60 * 60);

// 清除Cookie，將存放時間改現在，所以下一秒就失效了。
setcookie("myName", "新手玩家", time());


if (isset($_COOKIE['username'])) {
    echo 'User ' . $_COOKIE['username'] . 'is set<br>';
} else {
    echo 'User is not set';
}
