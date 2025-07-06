<?php

//Including all resourses for the site
function sh_script_resourses()
{
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
}
add_action('wp_enqueue_scripts', 'sh_script_resourses');


function sh_style_resourses()
{
    //name, absolute path, dependencies, version, media
    //wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '#', 'all');
    //lagt till
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    //lagt till
    wp_enqueue_style('shiatsu-custom-style', get_stylesheet_directory_uri() . '/css/custom.css');

    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css');
    //lagt till
    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null);
}
add_action('wp_enqueue_scripts', 'sh_style_resourses');

//Fonts
function google_fonts()
{
    //Av någon anledning knasar det med wp_enqueue_script
?>
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"><?php
}
add_action('wp_head', 'google_fonts');


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

    //Nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'sh_theme_setup');


//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33,
    ));
}
function my_acf_admin_head()
{
?>
<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('.layout').addClass('-collapsed');
        $('.acf-postbox').addClass('closed');
    });
})(jQuery);
</script>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');