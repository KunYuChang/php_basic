<?
# cookie 資料暫存
/**
 * 1. cookie 是使用者瀏覽網站時，將一些小資料記錄在伺服器上進行資訊的暫存，作為下次再訪時或者瀏覽過程中取用某些值。
 * 2. 若無設定存放時間，當瀏覽器關閉後，該cookie自動過期。
 * 3. 設定後，須在下次瀏覽網頁才能使用。
 * 4. setcookie撰寫的位置必須在任何輸出(echo,print_r)之前
 * 5. 除非某特殊原因，否則應該使用session而非cookie 
 */

if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    setcookie('username', $username, time() + 60 * 60);
    header('Location: page2.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>