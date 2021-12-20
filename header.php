<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>">
    <link rel="icon" href="../../favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>-->
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php //header field variables
    $header_class = '';
    $style = '';
    $color = get_field('color_theme');
    $header_image = get_field('header_image');
    $overlay_color = '';

    if (is_front_page()) {
        $header_class = 'header_big';
    } else {
        $header_class = 'header_small';
    }
    if ($header_image) {
        $style = 'style="background-image:url(\'' . wp_get_attachment_url($header_image, 'full') . '\')"';
        $overlay_color = get_field('overlay_color');
    }
    ?>
    <div class="header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- get menu -->
                    <?php get_template_part('parts/main-menu'); ?>

                    <header id="header-new"
                        class="<?php echo $header_class; ?> <?php echo $color; ?> <?php echo $overlay_color; ?>"
                        <?php echo $style; ?>>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text_container">
                                        <?php //loop ACF flex Content for layouts of header_items
                                        if (have_rows('header_items')) {
                                            while (have_rows('header_items')) {
                                                the_row();

                                                $layout = get_row_layout();
                                                get_template_part('templates/header/' . $layout); ?>
                                        <?php
                                            } ?>
                                    </div>

                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </header>
                </div>
            </div>
        </div>
    </div>