<?php 
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM users");
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style_reg_page.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="stylesheet" href="/css/same_styles_log-reg.css">
    <title>Registration</title>
</head>

<body>

    <div>
        <?php require "../sections/header.php" ?>
        <?php
            if (isset($_POST['username'])) {
                $username = stripslashes($_REQUEST['username']);
                $username = $mysql->real_escape_string($username);
                $email = stripslashes($_REQUEST['email']);
                $email = $mysql->real_escape_string($email);
                $confirm_email = stripslashes($_REQUEST['confirm_email']);
                $confirm_email = $mysql->real_escape_string($confirm_email);
                $password = stripslashes($_REQUEST['password']);
                $password = $mysql->real_escape_string($password);
                $confirm_password = stripslashes($_REQUEST['confirm_password']);
                $confirm_password = $mysql->real_escape_string($confirm_password);
                $name = stripslashes($_REQUEST['name']);
                $name = $mysql->real_escape_string($name);
                $surname = stripslashes($_REQUEST['surname']);
                $surname = $mysql->real_escape_string($surname);
                $birthday = stripslashes($_REQUEST['birthday']);
                $birthday = $mysql->real_escape_string($birthday);
                $country = stripslashes($_REQUEST['country']);
                $country = $mysql->real_escape_string($country);
                $native_city = stripslashes($_REQUEST['native_city']);
                $native_city = $mysql->real_escape_string($native_city);

                $isFormValid = TRUE;
                if(strlen($username) < 3) {
                    echo '<div class="container">
                            <h2 class="h2">Username is too short.</h2>
                        </div>';
                    $isFormValid = FALSE;
                    exit();
                }
                
                if(strlen($email) < 7) {
                    echo '<div class="container">
                            <h2 class="h2">Email is too short.</h2>
                        </div>';
                    $isFormValid = FALSE;
                    exit();
                }
                
                if(strlen($password) < 6) {
                    echo '<div class="container">
                            <h2 class="h2">Password is too short.</h2>
                        </div>';
                    $isFormValid = FALSE;
                    exit();
                }
 
                if($email !== $confirm_email){
                    echo "<div class='container'>
                            <h2 class='h2'>Email doesn\'t match.</h2>
                        </div>";
                    $isFormValid = FALSE;
                    exit();
                }
                
                if($password !== $confirm_password){
                    echo "<div class='container'>
                            <h2 class='h2'>Password doesn\'t match.</h2>
                        </div>";
                    $isFormValid = FALSE;
                }


                if($isFormValid) {
                    $query = "INSERT INTO `users` (username, email, `password`, `name`, surname, birthday, country, native_city)
                    VALUES ('$username', '$email', '" . md5($password) . "', '$name', '$surname', '$birthday', '$country', '$native_city')";
                    $result = $mysql->query($query);
                    if (!$result) {
                        echo '<div class="container">
                                <h2 class="h2">You have successfully registered.</h2>
                            </div>';
                    } else {
                        echo "<div class='container'>
                                    <h2 class='h2'>You have successfully registered.</h2>
                            </div>";
                    }
                }

            } else {
        ?>
        <?php require "../sections/registration.php" ?>
        <?php
            }
        ?>

    </div>
    
    <?php require "../sections/footer.php" ?>
    
</body>

</html>