<?php 
    session_start();
    $mysql = new mysqli('localhost','root','','hl_blog');
    $content = $mysql->query("SELECT * FROM articles WHERE id = ". $_GET['id']);
    $article = $content->fetch_assoc();
?>
<!DOCTYPE html>

<html>

<head>
    <?php require "../sections/head.php" ?>
    <script src="https://kit.fontawesome.com/ba8a0d6ffd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style_article.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <title>Event</title>
</head>

<body>

    <div>
        <?php require "../sections/header.php" ?>

        <main class="main-part">
            <div>

                <article class="section">
                    <a>
                        <div class="section-post">
                            <img src="/img/event.jpg" class="image-article">
                            <hr>
                            
                            <div class="text">
                                <div>
                                    <h1>Lorem Ipsum</h1>
                                    <p class="text-data">Dec.15 2020 year</p>
                                    <div class="rate">
                                        <i class="fas fa-star" href="#"></i>
                                        <i class="fas fa-star" href="#"></i>
                                        <i class="fas fa-star" href="#"></i>
                                        <i class="fas fa-star" href="#"></i>
                                        <i class="far fa-star" href="#"></i>
                                    </div>

                                </div>
                                <hr class="vertical-strip">
                                <?php
                                    echo $article['fulltext'];
                                ?>
                            </div>
                        </div>
                    </a>
                </article>

                <article class="section-comments">
                        <div class="section-post-comments">
                            <div class="all-comments">
                                <div class="profile-comment">
                                    <span class="profile-picture">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                                    <div class="profile-name">
                                        <div class="profile-name-textarea">
                                            <p>Username</p>
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="button-enter-comment">
                                        <a class="enter" href="#">Enter</a>
                                    </div>
                                </div>
                                <div class="profile-comment">
                                    <hr class="comment-strip">
                                </div>
                                <?php 
                                $comments = array(
                                    array(
                                        "username" => "Scientist",
                                        "comment" => "Oh no... Probably those people from the Anomalous Materials laboratory again."
                                    ),
                                    array(
                                        "username" => "Soldier",
                                        "comment" => "And why do we have to do the dirty work? Just because Shepard's team got caught up in something?"
                                    )
                                );

                                foreach ($comments as $comment) {
                                    require "../sections/comments.php";
                                }
                                ?>
                            </div>
                        </div>
                </article>
            </div>
        </main>
    </div>

    <?php require "../sections/footer.php" ?>

</body>

</html>