<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webdemo
 *
 *
 */
?>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php  wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
    wp_body_open();
?>
    <div class="header-block">
<!--        --><?php //header_block(); ?>
<!--        <div class="header-right">-->
<!--            <div class="icon">-->
<!--                <span>hjhfj</span>-->
<!--            </div>-->
<!--        </div>-->
    </div>

