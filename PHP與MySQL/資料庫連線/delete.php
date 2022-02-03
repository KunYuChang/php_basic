<?php

$sql = "DELETE FROM user WHERE username = 'ironman'";

$sql = "DELETE FROM user WHERE username LIKE 'mark%'";

$result = mysqli_query($link, $sql);

if ($mysqli_affected_rows($link) > 0) {
    echo "刪除成功";
} elseif (mysqli_affected_rows($link) == 0) {
    echo "無資料刪除";
} else {
    echo "{$sql} 語法執行失敗，錯誤訊息:" . mysqli_error($link);
}
