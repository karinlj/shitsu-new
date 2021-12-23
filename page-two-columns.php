<?php
/*
Template name:  Page Two Columns
Description:  Page Two Columns
 */
?>
<?php get_header(); ?>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-8">
                        <?php //layouts of page_blocks - Flex content

                        //Loopa ACF flex Content
                        if (function_exists('have_rows')) {

                            if (have_rows('page_blocks')) {
                                while (have_rows('page_blocks')) {
                                    the_row();

                                    $layout = get_row_layout();
                                    // load layout from the templates folder
                                    get_template_part('templates/' . $layout);
                                }
                            }
                        } ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php

                        if (function_exists('have_rows')) {

                            if (have_rows('page_blocks')) {
                                while (have_rows('page_blocks')) {
                                    the_row();

                                    $layout = get_row_layout();
                                    get_template_part('templates/' . $layout);
                                }
                            }
                        } ?>
                    </div>
                </div>
                <?php get_footer(); ?>

            </div>
        </div>