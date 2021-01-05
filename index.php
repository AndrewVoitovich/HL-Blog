<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header-footer.css">
    <link rel="icon" href="/img/logo.png" type="image/png">
    <title>HL Blog</title>

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
                    <?php 
                    
                    $articles = array(
                        array(
                            "title" => "title_1", 
                            "text" => "text_1",
                            "image" => "/img/event.jpg",
                            "link" => "/pages/article_page.php"
                        ),
                        array(
                            "title" => "title_2", 
                            "text" => "text_2",
                            "image" => "/img/event.jpg",
                            "link" => "/pages/article_page.php"
                        ),
                        array(
                            "title" => "title_3", 
                            "text" => "text_3",
                            "image" => "/img/event.jpg",
                            "link" => "/pages/article_page.php"
                        )
                    );

                    foreach ($articles as $article) {
                        require "./sections/article.php";
                    }
                    ?>
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