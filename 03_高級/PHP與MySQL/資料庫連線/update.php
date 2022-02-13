 <?php

    $sql = "UPDATE user SET password = 'newpw123456', name = '菜頭'
            WHERE id = 1;";

    $result = mysqli_query($link, $sql);

    if ($mysqli_affected_rows($link) > 0) {
        echo "更新成功";
    } elseif (mysqli_affected_rows($link) == 0) {
        echo "無資料更新";
    } else {
        echo "{$sql} 語法執行失敗，錯誤訊息:" . mysqli_error($link);
    }
