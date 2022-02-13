<?php

#PDO
/**
 *  1. PHP Data Objects(PHP Extension)
 *  2. 精簡且一致的訪問資料庫方式
 *  3. 可用於許多不同的資料庫
 *  4. PDO provides a data access layer
 *  5. OOP with methods and properties
 * 
 *  優點:
 *  1. Multiple Databases : 適用於不同資料庫
 *  2. Security/ Prepared Statements : 安全性，提供防範SQL injection的語法。
 *  3. Usability : 提供許多helper function
 *  4. Reusability
 *  5. Excellent Error Handling * 
 * 
 *  Main PDO Classes
 *  1. PDO : 連線PHP & DB
 *  2. PDOStatement : 查詢語法與執行
 *  3. PDOException : error
 * 
 *  使用PDO前的設定
 *  php.ini 需要包含此內容 (以mysql為例) 
 *  extension=php_pdo_mysql.dll
 */


$host     = 'localhost';
$user     = 'root';
$password = 'password';
$dbname   = 'php_pdo_posts';

// Set DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname";

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

# PDO QUERY
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br>';
}

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->title . '<br>';
}

# PREPARED STATEMENTS (prepare & execute)

// 不安全的寫法 (SQL injection)
// $sql = "SELECT * FROM posts WHERE author = '$author'";

// 取得多筆資料 FETCH MULTIPLE POSTS

// User Input
$author = 'joe';
$is_published = false;
$id = 1;

// Positional Params
$sql = 'SELECT * FROM posts WHERE author = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);
$posts = $stmt->fetchAll();

// Named Params
$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_published]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . '<br>';
}

// 取得單筆資料 FETCH SINGLE POSTS

$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

echo $post->body;

// 取得資料筆數
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();

echo $postCount;

// 新增
$title = 'post5';
$body = 'this is post5';
$author = 'kevin';

$sql = "INSERT INTO posts(title, body, author) VALUES (:title, :body, :author)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
echo 'Post Added';

// 更新
$id = 1;
$body = 'this is the updated posts';

$sql = "UPDATE posts SET body = :body WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);
echo 'Post Updated';

// 刪除
$id = 1;

$sql = "DELETE FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
echo 'Post Deleted';

// 搜尋資料
$search = "%post%";
$sql = 'SELECT * FROM posts WHERE title LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . '<br>';
}
