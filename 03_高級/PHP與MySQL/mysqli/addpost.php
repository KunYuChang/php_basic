<?php

require('config/config.php');
require('config/db.php');

// Check For Submit
if (isset($_POST['submit'])) {
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    // 補充資訊 : https://ithelp.ithome.com.tw/articles/10214620

    $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

    if (mysqli_query($conn, $qiery)) {
        header('Location:' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <h1>Add Post</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</body>

</html>