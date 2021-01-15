<?php 
    session_start();
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM users WHERE id = ". $_SESSION['user-id']);
    $row = $content->fetch_assoc();
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style_profile.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <script src="https://kit.fontawesome.com/ba8a0d6ffd.js" crossorigin="anonymous"></script>
    <title>HL Blog</title>
</head>

<body>
    <?php require "../sections/header.php" ?>
    
    <?php
        if(isset($_POST['username'])){
            $username = stripslashes($_REQUEST['username']);
            $email = stripslashes($_REQUEST['email']);
            $password = stripslashes($_REQUEST['password']);
            $name = stripslashes($_REQUEST['name']);
            $surname = stripslashes($_REQUEST['surname']);
            $birthday = stripslashes($_REQUEST['birthday']);
            $country = stripslashes($_REQUEST['country']);
            $native_city = stripslashes($_REQUEST['native_city']);

            $isFormValid = TRUE;
            if(strlen($username) < 3) {
                echo "<div class='container-error'>
                        <span class='error-message'>
                            <p class='error'>Username is too short.</p>
                        </span>
                      </div>";
                $isFormValid = FALSE;
            }

            if(strlen($email) < 7) {
                echo "<div class='container-error email-margin'>
                        <span class='error-message'>
                            <p class='error'>Email is too short.</p>
                        </span>
                      </div>";
                $isFormValid = FALSE;
            }

            if(strlen($password) < 6) {
                echo "<div class='container-error password-margin'>
                        <span class='error-message'>
                            <p class='error'>Password is too short.</p>
                        </span>
                      </div>";
                $isFormValid = FALSE;
            }

            if($isFormValid) {
                $query = "UPDATE users SET 
                username = '$username', 
                email = '$email', 
                password = md5('$password'), 
                name = '$name', 
                surname = '$surname', 
                birthday = '$birthday', 
                country = '$country', 
                native_city = '$native_city'
                WHERE id = " . $_SESSION['user-id'];

                $result = $mysql->query($query);
                if ($result) {
                    header("Location: /pages/profile.php");
                } else {
                    echo    "<div class='form'>
                                <h3 class='form-1'>Required fields are missing.</h3><br/>
                            </div>";
                }

            }
            
        }
        
    ?>
    <?php require "../sections/profile_changes.php"; ?>


    <?php require "../sections/footer.php" ?>
</body>

