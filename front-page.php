<?php
/*
 * Template Name: Front Page
 * Description: Front page template
 */
?>
<?php get_header(); ?>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php //layouts of front_page_blocks - Flex content

                //Loopa ACF flex Content
                if (function_exists('have_rows')) { ?>

                <?php
                    if (have_rows('front_page_blocks')) { ?>

                <?php while (have_rows('front_page_blocks')) { ?>
                <?php the_row(); ?>

                <?php $layout = get_row_layout(); ?>

                <?php // load layout from the templates folder
                            get_template_part('templates/' . $layout); ?>

                <?php }
                    }
                } ?>
                <?php get_footer(); ?>
            </div>
        </div>
    </div>
</div>