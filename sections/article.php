<article class="section">
    <a href="../pages/article_page.php?id=<?php echo $article["id"] ?>">
        <div class="section-post">
            <img src="<?php echo $article["image"] ?>">
            <div class="text">
                <h2><?php echo $article["title"] ?></h2>
                <p><?php echo $article["text"] ?></p> 
                <p class="text-rm">read more...</p> 
            </div>
        </div>
    </a>
    <?php
    if( $_SERVER['REQUEST_URI'] == '/pages/admin_panel_page.php' ) {
        $id = $article['id'];
        echo "<div class=\"buttons-article\">
                <a class=\"edit-article\" href=\"/pages/edit_article_page.php?id=$id\">Edit</a>
                <a class=\"delete-article\" href=\"/pages/delete_article.php?id=$id\">Delete</a>
            </div>";
    }
    ?>
</article>