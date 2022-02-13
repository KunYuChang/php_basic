<?php

// 客戶端傳送過來的資料，可以使用htmlentities來防範XSS。

// GET
if (isset($_GET['name']) || isset($_GET['age'])) {
    $name = htmlentities($_GET['name']);
    $age = htmlentities($_GET['age']);

    echo $name;
    echo $age;

    echo $_SERVER['QUERY_STRING'];

    exit();
}

// POST
if (isset($_POST['name']) || isset($_POST['age'])) {
    $name = htmlentities($_POST['name']);
    $age = htmlentities($_POST['age']);

    echo $name;
    echo $age;

    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
    <ul>
        <li>
            <a href="get.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>

</html>