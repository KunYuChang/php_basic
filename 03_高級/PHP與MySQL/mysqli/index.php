<?php

require('config/db.php');

// Create Query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <?php foreach ($posts as $post) : ?>
            <h3><?php echo $post['title'] ?></h3>
            <small>
                Created on
                <?php echo $post['created_at'] ?>
                by
                <?php echo $post['author'] ?>
            </small>
            <p><?php echo $post['body'] ?></p>
            <a class="btn btn-default" href="post.php?id=<?php echo $post['id'] ?>">
                Read More
            </a>
        <? endforeach; ?>
    </div>
</body>

</html>