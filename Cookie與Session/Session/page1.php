<?
# session 資料暫存
/**
 * 1. session 是使用者瀏覽網站時，將一些小資料記錄在伺服器上進行資訊的暫存，作為下次再訪時或者瀏覽過程中取用某些值。
 * 2. 存放時間依伺服器中php.ini session timeout 設定的時間而定 
 * 3. session設定後馬上可以取用
 * 4. session 還沒過期或清除之前都可以取用
 */

if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="email" placeholder="Enter Email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>