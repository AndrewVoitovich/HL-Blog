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
    <?php if(isset($_SESSION['user-id'])): ?>
        <div class="header-buttons">
            <a class="log-reg" href="/pages/profile.php">Profile</a>
            <a class="log-reg" href="/logout.php">Logout</a>
        </div>
    <?php else: ?>
        <div class="header-buttons">
            <a class="log-reg" href="/pages/log_page.php">Login</a>
            <a class="log-reg" href="/pages/reg_page.php">Registration</a>
        </div>
    <?php endif; ?>

</header>