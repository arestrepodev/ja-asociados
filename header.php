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
                <form action="" class="Mobile__search">
                    <a id="" class="Mobile__search__btn">
                        <i class="fas fa-search Mobile__search__icon"></i>
                    </a>
                    <input  id="" class="Mobile__input" type="text" name="Buscar" id="Buscar">
                </form>
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
            <!-- <ul class="Mobile__navbar__list">
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-home"></i>
                        <span class="Mobile__navbar__text">Inicio</span>
                    </a>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-sun"></i>
                        <span class="Mobile__navbar__text">Nuestra razón</span>
                    </a>
                    <ul class="Mobile__dropdown">
                        <li class="Mobile__dropdown__item">
                            <a href="#" class="Mobile__dropdown__link">
                                <i class="icon-circle-right Mobile__dropdwon__icon"></i>
                                ¿Que es Ja?
                            </a>
                        </li>
                        <li class="Mobile__dropdown__item">
                            <i class="icon-circle-right Mobile__dropdwon__icon"></i>
                            <a href="#" class="Mobile__dropdown__link">Historia</a>
                        </li>
                    </ul>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-folder"></i>
                        <span class="Mobile__navbar__text">Nuestra Experiencia</span>
                    </a>
                    <ul class="Mobile__dropdown">
                        <li class="Mobile__dropdown__item">
                            <i class="icon-circle-right Mobile__dropdwon__icon"></i>                            
                            <a href="#" class="Mobile__dropdown__link">Iniciativas Propias</a>
                        </li>
                        <li class="Mobile__dropdown__item">
                            <i class="icon-circle-right Mobile__dropdwon__icon"></i>
                            <a href="#" class="Mobile__dropdown__link">Logros destacados</a>
                        </li>
                    </ul>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-image"></i>
                        <span class="Mobile__navbar__text">Galeria</span>
                    </a>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-users"></i>
                        <span class="Mobile__navbar__text">Equipo</span>
                    </a>
                    <ul class="Mobile__dropdown">
                        <li class="Mobile__dropdown__item">
                            <i class="icon-circle-right Mobile__dropdwon__icon"></i>                        
                            <a href="#" class="Mobile__dropdown__link">Asi Funcionamos</a>
                        </li>
                    </ul>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-books"></i>
                        <span class="Mobile__navbar__text">Aliados</span>
                    </a>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon fas icon-file-empty"></i>
                        <span class="Mobile__navbar__text">Publicaciones</span>
                    </a>
                </li>
                <li class="Mobile__navbar__item">
                    <a href="#" class="Mobile__navbar__link">
                        <i class="Mobile__navbar__icon icon-lock"></i>
                        <span class="Mobile__navbar__text">Políticas de Privacidad</span>
                    </a>
                </li>
            </ul> -->
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
            <ul class="NavList">
                <!-- Language -->
                <li class="NavList__item Language">
                    <a href="#" class="NavList__link Language__link">EN</a>
                </li>
            </ul>
           
            <!-- Search -->
            <form action="" class="Search">
                <a id="js-searchBtn" class="Search__btn">
                    <i class="icon-search Search__icon"></i>
                </a>
                <input  id="js-searchInput" class="Search__input" type="text" name="Buscar" id="Buscar">
            </form>
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
            <!-- <ul class="Navbar__list">
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-home"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-sun"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-folder"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-image"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-users"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-books"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon fas icon-file-empty"></i>
                    </a>
                </li>
                <li class="Navbar__item">
                    <a href="#" class="Navbar__link">
                        <i class="Navbar__link__icon icon-lock"></i>
                    </a>
                </li>
            </ul> -->
        </nav>
