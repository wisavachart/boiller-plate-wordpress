<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav>
        <ul>
            <a href="<?php echo site_url() ?>">
                <li>Home</li>
            </a>
            <a href='<?php echo site_url('/social-news') ?>'>
                <li>Social new</li>
            </a>
            <a href="">
                <li>Made channel</li>

            </a>
            <a href="">
                <li>Pr event</li>
            </a>
            <a href="">
                <li>About</li>
            </a>
        </ul>
    </nav>