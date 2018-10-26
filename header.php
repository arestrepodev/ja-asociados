<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaime Arteaga & Asociados</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Icons -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/style-fonts.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
    
    <?php wp_head();?>
</head>
<body <?php body_class('Wrapper'); ?>>
    
        <!-- Header Mobile -->
        <div class="Mobile__header">
            <div class="Mobile__menu" id="js-mobileMenu">
                <i class="icon-menu Mobile__menu__icon"></i>
            </div>
            <div class="Mobile__logo">
                <img class="Mobile__logo__img" src="<?php bloginfo('template_url')?>/img/logo-vector-web-ja.png" alt="Logotipo">
            </div>
            <div class="Mobile__language">
                <a href="#" class="Mobile__langauge__text">EN</a>
                <!-- <form action="" class="Mobile__search">
                    <a id="" class="Mobile__search__btn">
                        <i class="icon-search Mobile__search__icon"></i>
                    </a>
                    <input  id="" class="Mobile__input" type="text" name="Buscar" id="Buscar">
                </form> -->
            </div>
        </div>
        <!-- Menu Mobile -->
        <div class="Mobile__navbar" id="js-mobileNavbar">
            <a id="js-closeMobileMenu" href="#" class="Mobile__navbar__close__link">
                <i class="icon icon-circle-left Mobile__navbar__close__icon"></i>
            </a>
            
            <!-- Menu WordPress -->
            <?php 
                wp_nav_menu(
                    array(
                        'container' => false,
                        'items_wrap' => '<ul id="" class="Mobile__navbar__list">%3$s</ul>',
                        'theme_location' => 'mobile',
                        'container_class' => 'Mobile__navbar__list',
                        'link_before' => '<span class="">',
                        'link_after' => '</span'
                    )
                );
            ?>
        </div>

        <!-- Header -->
        <header class="Header">
            <!-- NavList Header -->
            <?php
                wp_nav_menu(
                    array(
                        'container' => false,
                        'items_wrap' => '<ul id="" class="NavList">%3$s</ul>',
                        'theme_location' => 'menu',
                        'container_class' => 'NavList'
                    )
                )
            ?>
        </header>

         <!-- Navbar Left -->
        <nav class="Navbar">
            <div class="Navbar__logo">
                <a class="Navbar__logo__link" href="<?php echo get_home_url(); ?>">
                    <img class="Navbar__logo__img" src="<?php bloginfo('template_url')?>/img/logo-vector-web-ja.png" alt="Logotipo">
                </a>
            </div>
            <?php 
                wp_nav_menu(array(
                    'container' => false,
                    'items_wrap' => '<ul id="" class="Navbar__list">%3$s</ul>',
                    'theme_location' => 'menuLeft',
                    'container_class' => 'Navbar__list'
                ));
            ?>
        </nav>
