<?php
    session_start();
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM articles");
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="stylesheet" href="/css/style_admin_panel_page.css">
    <title>HL Blog</title>
</head>

<body>

    <div>
        <?php require "../sections/header.php" ?>

        <main class="main-part">
            <div>
                <?php 
                    while( $article = $content->fetch_assoc()) {
                        require "../sections/article.php";
                    }
                ?>
            </div>
            <?php
                echo '<div class="button-add-article">
                        <a class="add-article" href="/pages/add_article_page.php">Add Article</a>
                      </div>';
            ?>
        </main>
    </div>
    
    <?php require "../sections/footer.php" ?>

</body>

</html>