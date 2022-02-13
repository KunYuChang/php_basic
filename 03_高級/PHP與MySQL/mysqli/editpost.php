<?php

require('config/config.php');
require('config/db.php');

// Check For Submit
if (isset($_POST['submit'])) {
    // Get form data
    $updated_id =  mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    // 補充資訊 : https://ithelp.ithome.com.tw/articles/10214620

    $query = "UPDATE posts 
              SET
              title = $title,
              author = $author,
              body = $body
              WHERE id = $updated_id";

    if (mysqli_query($conn, $qiery)) {
        header('Location:' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

// Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query
$query = 'SELECT * FROM posts WHERE id = ' . $id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

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
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $post['author']; ?>">
        </div>
        <div class=" mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" cols="30" rows="10"><?php echo $post['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</body>

</html>