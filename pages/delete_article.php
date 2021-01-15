<?php
    session_start();
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM articles WHERE id = ". $_GET['id']);
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style_delete_article.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <title>HL Blog</title>
</head>

<body>

    <div>
        <?php require "../sections/header.php" ?>

        <?php 
            $query = "DELETE FROM articles WHERE id = ". $_GET['id'];
            $result = $mysql->query($query);
            if($result){
                header("Location: /pages/admin_panel_page.php");
            }

        ?>

    </div>
    
    <?php require "../sections/footer.php" ?>

</body>

</html>