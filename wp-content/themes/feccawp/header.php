<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feccawp
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="bg-head-blue mb-625" style="background-color: #44A0FF;">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center margin-header">
                    <div class="d-flex align-items-center col-md-4 col-4 mb-4 mb-md-0 logo-container">
                        <a href="/" class="text-dark text-decoration-none">
                            <img src="<?php the_field("logo"); ?>" alt="logo">
                        </a>
                        <span class="header-text"><?php the_field("Tagline"); ?></span>
                    </div>
                    <div class="menu-burger__header">
                        <span></span>
                    </div>
                    <nav class="header__nav col-md-8 col-12 row justify-content-end nav-list-container">
                        <?
                        my_nav_menu( [ 'theme_location'  => '' ] );
                        ?>
                        <div class="nav-item nav-item-b col-3 d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a href="#" class="text-decoration-none btn-link-style"><?php the_field("button_header"); ?></a></button>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto margin-bot">
                    <h1 class="fw-ligh h1-style"><?php the_field("general_title"); ?></h1>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto text-center margin-bottom">
                    <a href="<?php the_field("header_link_button_appstore"); ?>" class="text-dark text-decoration-none"><img src="<?php the_field("appstore"); ?>" alt="AppStore"></a>
                    <a href="<?php the_field("header_link_button_google"); ?>" class="text-dark text-decoration-none"><img src="<?php the_field("googleplay"); ?>"
                            alt="GooglePlay"></a>
                </div>
                <div class="mx-auto text-center bg" style="background-image: url(<?php the_field("header_tel_bg"); ?>);">
                    <img class="iphone" src="<?php the_field("Iphone_photo"); ?>" alt="Iphone">
                </div>
            </div>
        </div>
    </header>
