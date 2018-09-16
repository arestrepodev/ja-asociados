<?php 

    // Register Menus
    function register_all_menus() {
        register_nav_menus(array(
            'menu' => __('Menu Superior'),
            'mobile' => __('Menu Móvil'),
            'menuLeft' => __('Menu Izquierdo')
        ));
    }

    add_action('init', 'register_all_menus');

    // Register Widgets Footers
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

    // Register Widgets Sidebar
    register_sidebar(array(
        'name' => 'Sidebar1',
        'before_widget' => '<div class="Sidebar__widget">',
        'after_sidebar' => '</div>',
        'before_title' => '<h3 class="Sidebar__widget__title">',
        'after_title' => '</h3>'
    ));

    // Custom Class Sidebar
    add_filter('body_class', 'add_custom_class');
    function add_custom_class($classes){
        if(is_page_template('page-sidebar.php')){
            $classes[] = 'is--Sidebar';
        }
        return $classes;
    }