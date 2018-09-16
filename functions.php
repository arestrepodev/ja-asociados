<?php 

    // Register Menus
    function register_all_menus() {
        register_nav_menus(array(
            'menu' => __('Menu Superior'),
            'mobile' => __('Menu Móvil')
        ));
    }

    add_action('init', 'register_all_menus');

    // Register Widgets
    register_sidebar(array(
        'name' => 'Footer1',
        'before_widget' => '<div class="WidgetFooter">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="WidgetFooter__title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Footer2',
        'before_widget' => '<div class="WidgetFooter">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="WidgetFooter__title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Footer3',
        'before_widget' => '<div class="WidgetFooter">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="WidgetFooter__title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Copyright',
        'before_widget' => '<div class="Copyright">',
        'after_widget' => '</div>'
    ));