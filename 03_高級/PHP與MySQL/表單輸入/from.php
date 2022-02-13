<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="FBB917">
    <form action="connect.php" method="POST">
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" required />
        <br>

        <label for="email">信箱:</label>
        <input type="email" name="email" id="email" required />
        <br>

        <label for="phone">電話:</label>
        <input type="text" name="phone" id="phone" required />
        <br>

        <input type="submit" name="submit" id="submit" />
    </form>
</body>

</html>