<form class="form" action="" method="post">
    <main class="container">
        <div class="left-part">
            <i class="fas fa-user-circle"></i>
            <p class="username"><?php echo $row['username'] ?></p>
                <?php if( $row['admin'] ) {
                        echo "<p class='user-class'>Admin</p>";
                    } else {
                        echo "<p class='user-class'>User</p>";
                    }
                ?>
            <p class="user-class">Id: <?php echo $row['id'] ?></p>
            <?php if( $row['admin'] ) {
                        echo "<div class='button-admin'>
                                <a class='admin' href='/pages/admin_panel_page.php'>Edit Articles</a>
                            </div>";
                    }
            ?>
        </div>
        <div class="right-part">
            <div class="all-settings">
                <div class="required-settings">
                    <p class="title-input">Username *</p>
                    <input class="input-name" name="username" value="<?php echo $row['username'] ?>">
                    <p class="title-input">Email *</p>
                    <input type="email" class="input-name" name="email" value="<?php echo $row['email'] ?>">
                    <p class="title-input">Password *</p>
                    <input type="password" class="input-name" name="password">
                    <p class="title-input">Birthday</p>
                    <input type="date" class="input-name" name="birthday" value="<?php echo $row['birthday'] ?>">
                </div>
                <div class="optional-settings">
                    <p class="title-input">Name</p>
                    <input class="input-name" name="name" value="<?php echo $row['name'] ?>">
                    <p class="title-input">Surname</p>
                    <input class="input-name" name="surname" value="<?php echo $row['surname'] ?>">
                    <p class="title-input">Country</p>
                    <input class="input-name" name="country" value="<?php echo $row['country'] ?>">
                    <p class="title-input">Native city</p>
                    <input class="input-name" name="native_city" value="<?php echo $row['native_city'] ?>">
                </div>
            </div>
            <div class="button-edit">
                <button class="edit">Edit</button>
            </div>
        </div>
    </main>
</form>