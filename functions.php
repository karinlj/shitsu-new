<?php

//Including all resourses for the site
function sh_script_resourses()
{
    //name, absolute path, dependencies, version, in_footer
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '#', true);

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
}
add_action('wp_enqueue_scripts', 'sh_script_resourses');


function sh_style_resourses()
{
    //name, absolute path, dependencies, version, media
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '#', 'all');
    //lagt till
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    //lagt till
    wp_enqueue_style('shiatsu-custom-style', get_stylesheet_directory_uri() . '/css/custom.css');

    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css');
    //lagt till
    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null);

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet');
}
add_action('wp_enqueue_scripts', 'sh_style_resourses');

function add_scripts()
{
    wp_register_script('custom_script', home_url() . '/wp-content/themes/theme-shiatsu/js/custom_script.js', array('jquery'));
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'add_scripts');


//Theme support
function sh_theme_setup()
{
    //Featured Image Support
    add_theme_support('post-thumbnails');
    //different sizes
    //width, height, hard-or soft cropping(hard)
    add_image_size('small-thumbnail', 200, 160, true);
    add_image_size('normal-wide-thumbnail', 400, 300, true); // 320, 420
    add_image_size('normal-thumbnail', 300, 300, true);
    add_image_size('large-thumbnail', 340, 550, true);


    add_image_size('banner-image', 920, 510, true);
    /*add_image_size('banner-image', 920, 610, array('left', 'top'
    ));*/

    //Nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    //Post formats
    //add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme', 'sh_theme_setup');


//Excerpt lenght control
function set_excerpt_length()
{
    return 50;
}
add_filter('excerpt_length', 'set_excerpt_length');


//Widget locations
function sh_init_widgets($id)
{


    /*footer widgets*/
    register_sidebar(array(
        'name' => 'social-links',
        'id'   => 'social-links',
        'before_widget' => '<div class="social-links">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    /*Aside-Box widgets*/
    register_sidebar(array(
        'name' => 'Aside-Box',
        'id'   => 'aside-box',
        'before_widget' => '<div class="aside">',
        'after_widget'  => '</div>'
    ));
}
add_action('widgets_init', 'sh_init_widgets');


//Custom Post Types
function sh_custom_post_types()
{
    $labels = array(
        'name' => 'Contact Posts',
        'singular_name' => 'Contact Post',
        'add_new' => 'Add Contact Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Contact Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true
    );
    register_post_type('contact-posts', $args);

    $labels = array(
        'name' => 'Enterprise Posts',
        'singular_name' => 'Enterprise Post',
        'add_new' => 'Add Enterprise Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Enterprise Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true
    );
    register_post_type('enterprise-posts', $args);

    $labels = array(
        'name' => 'About Posts',
        'singular_name' => 'About Post',
        'add_new' => 'Add About Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search About Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true
    );
    register_post_type('about-posts', $args);

    $labels = array(
        'name' => 'Future Posts',
        'singular_name' => 'Future Post',
        'add_new' => 'Add Future Posts Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Future Posts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchial' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 4,
        'exclude_from_search' => true
    );
    register_post_type('future-posts', $args);
}
add_action('init', 'sh_custom_post_types');


//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33,
    ));
}