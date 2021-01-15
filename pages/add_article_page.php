<?php
    session_start();
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM articles");
    $article = $content->fetch_assoc();
?>

<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <link rel="stylesheet" href="/css/style_edit_article_page.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <title>HL Blog</title>
</head>

<body>

    <div>
        <?php require "../sections/header.php" ?>

        <?php
            if(isset($_POST['title'])){
                $title = stripslashes($_REQUEST['title']);
                $text = stripslashes($_REQUEST['text']);
                $fulltext = stripslashes($_REQUEST['fulltext']);

                $query = "INSERT INTO articles ( title, `text`, `fulltext`)
                VALUES ('$title', '$text', '$fulltext')";

                $result = $mysql->query($query);

                if ($result) {
                    header("Location: /pages/admin_panel_page.php");
                } else {
                    echo    "<div class='form'>
                                <h3 class='form-1'>ASHIBKA</h3><br/>
                            </div>";
                }
            }
        ?>

        <form class="form" action="" method="post">
            <div class="container">
                <div class="top-part">
                    <img name="image" src="<?php echo $article['image'] ?>" class="image">
                    <div class="right-part">
                        <input class="title-input" name="title" placeholder="Title">
                        <textarea class="text-input" name="text" placeholder="Text"></textarea>
                    </div>
                </div>
                <div class="textarea-button">
                        <textarea class="fulltext-input" name="fulltext" placeholder="Full text"></textarea>
                    <div class="button-edit-article">
                        <button class="edit-article">Accept</button>
                    </div>
                </div>
            </div>
        </form>



    </div>
    
    <?php require "../sections/footer.php" ?>

</body>

</html>