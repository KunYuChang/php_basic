<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>

    <?php

    // define variables and set to empty
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Please enter a valid name";
        } else {
            $name = test_input($_POST['name']);
            if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
                $nameErr = "Only letters and white spaces allowed";
            }
        }

        if (empty($_POST['email'])) {
            $emailErr = "Valid Email Address";
        } else {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "The email address is incorrect";
            }
        }

        if (empty($_POST['website'])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        FullName: <input type="text" name="name">
        <span class="error"> <?php echo $nameErr; ?></span>
        <br><br>
        E-mail address: <input type="text" name="email">
        <span class="error"> <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"> <?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="2" cols="10"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo $comment . "<br>";
    echo $gender . "<br>";
    ?>

</body>

</html>