<?php
/**
 * Created by PhpStorm.
 * User: Karin
 * Date: 2018-06-14
 * Time: 21:59
 */

?>

<section class="three-boxes">

    <?php

    //Loopa kolumner
    if (have_rows('column_content')) {
        while (have_rows('column_content')) {
            the_row();
            ?>

            <?php //effect class for overlay effect when text-on-hover or zoom effect when no text
            $effect_class = '';
            
            if (get_sub_field('heading_on_hover') || get_sub_field('text_on_hover') ) { //if hover text
                
                 $effect_class = 'overlay';
            }
            else {
                 $effect_class = 'zoom';
            }
            ?>

    
            <div class="three-boxes-column">
                
                <?php
                //Innehåll i kolumnerna

                if (get_row_layout() == 'img_big') { 
                
                    $text_link = get_sub_field('url'); //linking the text ?>


                    <div class="part <?php echo $effect_class;?>"> <!--zoom or overlay-->
                        
                            <?php $img_id = get_sub_field('image'); ?>

                            <?php
                            echo wp_get_attachment_image($img_id, 'large');
                            ?>



                            <?php if (get_sub_field('heading_on_hover') || get_sub_field('text_on_hover') ) { ?>
                        
                                <!--overlay effect -->
                                <div class="fill-out"></div> <!--extra div for overlay effect on image when text-on-hover-->

                                    <div class="text-on-hover">
                                            <div class="text-part-inner">

                                                <?php
                                                if ( $text_link) { ?>
                                                        <a href="<?php echo $text_link; ?>">
                                                <?php
                                                }?> 

                                                        <h2><?php the_sub_field('heading_on_hover'); ?></h2>
                                                        <?php the_sub_field('text_on_hover'); ?>

                                                 <?php
                                                 if ( $text_link) { ?>
                                                        </a>
                                                    <?php
                                                }
                                                ?>

                                            </div>
                                    </div>
                           <?php
                            }
                           ?>

                    </div>
                
                <?php
                } ?>

    
                <?php
                if (get_row_layout() == 'image_text') {

                    if (have_rows('content')) {
                        while (have_rows('content')) {
                            the_row();
                            ?>
                
                            <?php //effect class for overlay effect when text-on-hover or zoom effect when no text
                            $effect_class = '';

                            if (get_sub_field('heading_on_hover') || get_sub_field('text_on_hover') ) { 

                                 $effect_class = 'overlay';
                            }
                            else {
                                 $effect_class = 'zoom';
                            }
                            ?>

                            <?php $color = get_sub_field('color_theme'); 
                            $text_link = get_sub_field('url'); //linking the text ?>


                                    
                            <div class="three-boxes-column-child <?php echo $color ?>">

                                 <?php
                                 if (get_row_layout() == 'image') { ?>
                                    
                                
                                        <div class="part <?php echo $effect_class ?>"> <!--zoom or overlay-->
                                            
                                            
                                                <?php $img_id = get_sub_field('image'); ?>

                                                 <?php
                                                echo wp_get_attachment_image($img_id, 'large');


                                                if (get_sub_field('heading_on_hover') || get_sub_field('text_on_hover') ) { ?>
                                                            
                                                    <!--overlay effect -->
                                                    <div class="fill-out"></div> <!--extra div for overlay effect on image when text-on-hover-->

                                                <?php 
                                                if ( $text_link) { ?>
                                                        <a href="<?php echo $text_link; ?>">
                                                <?php
                                                } ?>
                                                            
                                                        <div class="text-on-hover">
                                                                <div class="text-part-inner">

                                                                    <h2><?php the_sub_field('heading_on_hover'); ?></h2>
                                                                    <?php the_sub_field('text_on_hover'); ?>

                                                                </div>

                                                        </div>
                                                            
                                                     <?php        
                                                    if ( $text_link) { ?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                            
                                            
                                            
                                                  <?php
                                                  } ?>


                                            
                                        </div> <!--part-->
            

                                        <?php
                                        }

                                        if (get_row_layout() == 'text') { ?>
                                    
                                                <div class="text-part-outer">

                                                    <div class="text-part-inner">

                                                            <?php
                                                            if ( $text_link) { ?>
                                                                    <a href="<?php echo $text_link; ?>">
                                                            <?php
                                                            } ?>

                                                                    <h2><?php the_sub_field('heading'); ?></h2>
                                                                    <?php the_sub_field('text'); ?>

                                                            <?php
                                                             if ( $text_link) { ?>
                                                                </a>
                                                            <?php
                                                            }
                                                            ?>

                                                    </div>

                                                </div>

                                        <?php
                                        } ?>
                                </div> <!--three-boxes-column-child-->

                            <?php
                        }
                    }
                } ?>

            </div> <!--three-boxes-column-->
        <?php
        }
    }
    ?>


</section>

