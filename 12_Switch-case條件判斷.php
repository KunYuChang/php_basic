<a href="https://progressbar.tw/posts/173">Switch-case 條件判斷</a>
<?php

// ? 前情提要 
$number = 0;
if ($number == 0)
    echo "0";
else if ($number == 1)
    echo "1";
else if ($number == 2)
    echo "2";
else
    echo "default";

// ? Switch-case
$userRole = 'editor';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}

?>