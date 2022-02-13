<?php
// Check For Submit

if (isset($_POST['submit'])) {
    // Get Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';

    // // Check Required Fields
    // if (!empty($email) && !empty($name) && !empty($message)) {
    //     // Passed
    //     $msg = '送出成功';
    //     $msgClass = 'alert-danger';
    // } else {
    //     // Failed
    //     $msg = 'Please fill in all fields';
    //     $msgClass = 'alert-danger';
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="container">
            <div class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- 顯示錯誤訊息 -->
        <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>

        <form method="POST" action="php_contact_form.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <input type="text" class="form-control" name="message" id="message">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</body>

</html>