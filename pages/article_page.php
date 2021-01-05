<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ba8a0d6ffd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style_article.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>Event</title>

</head>

<body>

    <div>
        <header>
            <div>
                <a class="logotype" href="/"><img src="/img/logo.png" class="img-logo"></a>

                <a class="logo-text" href="/">HL Blog</a>
            </div>
            <nav class="menu">
                <a class="header-links" href="#">News</a>
                <a class="header-links" href="#">Events</a>
                <a class="header-links" href="#">Shop</a>
                <a class="header-links" href="#">Contacts</a>
            </nav>
            <div class="header-buttons">
                <a class="log-reg" href="/pages/log_page.php">Login</a>
                <a class="log-reg" href="/pages/reg_page.php">Registration</a>
            </div>
        </header>

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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                                <br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                                <br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                                <br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.</p>
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



        <footer>
            <a class="logotype" href="#"><img src="/img/logo.png" class="img-logo-footer"></a>
            <p class="footer-text-name">Voitovych Andrew</p>
            <p class="footer-text-mail">voitovych.andrew.viktorovich@gmail.com</p>
            <div class="contacts">
                <a class="contact-buttons" href="#"><img src="/img/facebook.png" class="pictures-footer"></a>
                <a class="contact-buttons" href="#"><img src="/img/twitter.png" class="pictures-footer"></a>
                <a class="contact-buttons" href="#"><img src="/img/youtube.png" class="pictures-footer"></a>
                <a class="contact-buttons" href="#"><img src="/img/vk.png" class="pictures-footer"></a>
            </div>
        </footer>
</body>

</html>