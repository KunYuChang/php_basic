<?php

$sql = "INSERT INTO `user` (`username`, `password`, `name`) 
        VALUE ('thor', 'hammer', '索爾'),
              ('mark52, 'markpw','馬克52');";

$result = mysqli_query($link, $sql);

// 如果有異動到數量，代表有更新資料。
if (mysqli_affected_rows($link) > 0) {
    $new_id = mysqli_insert_id($link);
    echo "執行成功，新增後的 id 為 {$new_id}";
} elseif (mysqli_affected_rows($link) == 0) {
    echo "無資料新增";
} else {
    echo "{$sql} 語法執行失敗，錯誤訊息:" . mysqli_error($link);
}
