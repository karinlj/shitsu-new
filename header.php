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
    $col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';
    $style = '';
    $color = get_field('color_theme');
    $header_image = get_field('header_image');
    $header_image_default = get_field('header_image_default', 'option');
    $overlay_color = '';

    if (is_front_page()) {
        $header_class = 'header_big';
        $col_class = 'col 12 col-md-8 offset-md-1';
    } else {
        $header_class = 'header_small';
    }

    if ($header_image) {
        $style = 'style="background-image:url(\'' . wp_get_attachment_url($header_image, 'full') . '\')"';
        $overlay_color = get_field('overlay_color');
    } else if ($header_image_default) {
        $style = 'style="background-image:url(\'' . wp_get_attachment_url($header_image_default, 'full') . '\')"';
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
                                        <div class="<?php echo $col_class; ?>">
                                            <?php
                                            $header_heading = get_field('header_heading');
                                            $header_text = get_field('header_text');
                                            $button_link_url = get_field('button_link_url');
                                            $button_link_text = get_field('button_link_text');
                                            $button_image_url = get_field('button_image_url'); ?>

                                            <?php if ($header_heading) { ?>
                                            <h1 class="header_heading">
                                                <?php echo $header_heading; ?>
                                            </h1>
                                            <?php } ?>

                                            <?php if ($header_text) { ?>
                                            <p class="header_text">
                                                <?php echo $header_text; ?>
                                            </p>
                                            <?php } ?>

                                            <?php if ($button_link_url && $button_link_text) { ?>
                                            <div class="btn_wrapper">
                                                <a class="button_link dark" href="<?php echo $button_link_url; ?>">
                                                    <?php echo $button_link_text; ?></a>
                                            </div>
                                            <?php } ?>

                                            <?php if ($button_link_url && $button_image_url) { ?>
                                            <div class="booking_btn">
                                                <a href="<?php echo esc_url($button_link_url); ?>" target="_blank">
                                                    <img class=" bokadirekt"
                                                        src="<?php echo esc_url($button_image_url); ?>" alt="Boka tid"
                                                        border="0" />
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    </div>