<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title>thegioididong.com</title>
    <link rel="shortcut icon" href="/wp-content/uploads/2021/12/Thegioididong-150x150.png"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <?php wp_head(); ?>
</head>
    <body>
        <header>
            <div class="menu_bar">
            <ul>
                <li><a href="default.asp">Home</a></li>
                <li><a href="news.asp">News</a></li>
                <li><a href="contact.asp">Contact</a></li>
                <li><a href="about.asp">About</a></li>
                </ul>
            </div>
        </header>
<?php body_class();
    do_action('demo_action');

?>


