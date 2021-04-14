<nav class="top-nav">
    <ul>
        <li><a href="<?php URLROOT; ?>/pages/index">Home</a></li>
        <li><a href="<?php URLROOT; ?>/pages/about">About</a></li>
        <li><a href="<?php URLROOT; ?>/pages/projects">Projects</a></li>
        <li><a href="<?php URLROOT; ?>/pages/blog">Blog</a></li>
        <li><a href="<?php URLROOT; ?>/pages/contact">Contact</a></li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?php URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
            <a href="<?php URLROOT; ?>/users/login">Log in</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
