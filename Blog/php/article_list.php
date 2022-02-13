<?php

require_once 'php/db.php';
require_once 'php/functions.php';

$datas = get_publish_article();
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章列表</title>
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (!empty($datas): ?>
                        <?php foreach($datas as $row):?>
                            <?php
                                // 處理摘要
                                $abstract = strip_tags($row['content']); // 去除所有html標籤
                                $abstract = mb_stristr($abstract,0,100,"UTF-8"); // 取得100字
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a href="article.php?p=<?php echo $row['id']; ?>">
                                            <?php echo $row['title']; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <span class="label label-info"><?php echo $row['category'];?></span>$nbsp;
                                        <span class="label label-danger"><?php $row['create_date']; ?></span>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h3 class="text-center">尚無文章</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>