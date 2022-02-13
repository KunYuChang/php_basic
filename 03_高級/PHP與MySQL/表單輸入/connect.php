<?php

// 檢測請求方法
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'test1') or die('連線錯誤:' . mysqli_connect_error());

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO users (name, email, phone) 
                VALUES ('$name','$email', '$phone')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Entry Successfull";
        } else {
            echo "Error Occurred";
        }
    }
}
