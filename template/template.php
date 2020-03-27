<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrap">

    <header>
        <h1><img height="36" id="image-header" src="assets/Logo.png"> <?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> Donny Matchen.<br><?php site_version(); ?></small>
    </footer>
</div>
</body>
</html>