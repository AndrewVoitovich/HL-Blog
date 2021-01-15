<?php 
    $mysql = new mysqli('localhost','root','','hl_blog');
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style_log_page.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="stylesheet" href="/css/same_styles_log-reg.css">
    <title>Sign-in</title>
</head>

<body>
    <div>

        <?php require "../sections/header.php" ?>

    </div>
    
    <?php session_start();
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            $username = $mysql->real_escape_string($username);
            $password = stripslashes($_REQUEST['password']);
            $password = $mysql->real_escape_string($password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `users` WHERE username='$username'
                        AND password='" . md5($password) . "'";
            $result = $mysql->query($query) or die($mysql->error);
            $rows = $result->num_rows;
            if ($rows == 1) {
                $user = $result->fetch_assoc();
                $_SESSION['user-id'] = $user['id'];
                // Redirect to user page
                header("Location: /");
            } else {
                echo "<div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>";
            }
        } else {
    ?>
    <?php require "../sections/login.php" ?>
    <?php
        }
    ?>

    <?php require "../sections/footer.php" ?>

</body>

</html>