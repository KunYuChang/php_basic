<?php
if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST["name"])) {
        die("Invalid name. Name should be alphabet");
    }
    echo "Hello" . $_POST['name'] . "<br>";
    echo "Your age is" . $_POST['age'] . "<br>";

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
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
</body>

</html>