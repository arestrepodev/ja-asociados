<?php 

    // Register Menus
    function register_all_menus() {
        register_nav_menus(array(
            'menu' => __('Menu Superior'),
            'mobile' => __('Menu Móvil')
        ));
    }

    add_action('init', 'register_all_menus');
