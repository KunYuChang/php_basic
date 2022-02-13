<?php

require_once 'php/db.php';
require_once 'php/functions.php';

$article = get_article($_GET['p']);
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ($article) : ?>
                        <h1><?php echo $article['title'] ?></h1>
                        <hr>
                        分類: <?php echo $article['category']; ?> 發布時間: <?php $article['create_date']; ?> <?php echo $article['content']; ?>
                    <?php else : ?>
                        <h3 class="text-center">尚無文章</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>