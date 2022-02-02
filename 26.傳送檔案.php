<?php
// 取得傳過來的檔案

$photo = '';
if (isset($_FILES['photo'])) {
    // print_r($_FILES);
    /**
     * 檔案的陣列有以下的索引值
     * $_FILES['設定的name鍵值']['name'] 原本的檔名
     * $_FILES['設定的name鍵值']['tmp_name'] 暫存在server上面的檔名
     * $_FILES['設定的name鍵值']['type'] 檔案型態
     * $_FILES['設定的name鍵值']['size'] 檔案大小
     * $_FILES['設定的name鍵值']['error'] 錯誤代碼 
     * $_FILES['設定的name鍵值']['name'] 原本的檔名
     */

    //  檢查上傳到server的暫存檔案是否存在
    if (file_exists($_FILES['photo']['tmp_name'])) {
        // move_uploaded_file 這個方法可以將上傳的檔案，移動到你目標的資料夾。
        $targetFolder = "files/";
        // move_uploaded_file("暫存檔", "目標檔");
        move_uploaded_file($_FILES['photo']['tmp_name'], $targetFolder . $_FILES['photo']['tmp_name']);

        // 將目標資料夾檔案名稱組在一起，就是在server上的檔案位置。
        $photo = $targetFolder . $_FILES['photo']['name'];
    } else {
        echo "上傳檔案失敗，暫存檔不在，請確認資料夾寫入權限。或php.ini上傳檔案容量限制是否太小。";
    }
}
