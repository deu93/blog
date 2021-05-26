<nav class="top-nav">
    <ul>
        <li><a href="<?php URLROOT; ?>/index">Home</a></li>
        <li><a href="<?php URLROOT; ?>/about">About</a></li>
        <li><a href="<?php URLROOT; ?>/projects">Projects</a></li>
        <li><a href="<?php URLROOT; ?>/posts">Blog</a></li>
        <li><a href="<?php URLROOT; ?>/contact">Contact</a></li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?php URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
            <a href="<?php URLROOT; ?>/users/login">Log in</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
