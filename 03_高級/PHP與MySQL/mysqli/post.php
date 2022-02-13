<?php
require('config/db.php');
require('config/config.php');

// Check For Submit
if (isset($_POST['delete'])) {
    // Get form data
    $delete_id =  mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = $delete_id";

    if (mysqli_query($conn, $qiery)) {
        header('Location:' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}



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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Posts</h1>
        <h3><?php echo $post['title'] ?></h3>
        <small>
            Created on
            <?php echo $post['created_at'] ?>
            by
            <?php echo $post['author'] ?>
        </small>
        <p><?php echo $post['body'] ?></p>
        <hr>
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>

        <a class="btn btn-default" href="editpost.php?id=<?php echo $post['id'] ?>">Edit</a>
    </div>
</body>

</html>