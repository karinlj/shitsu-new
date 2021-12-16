<?php
/*two boxes*/
?>
<section class="boxes">

<h2 class="section-heading text-center"><?php the_sub_field('heading'); ?></h2>

<div class="boxes-inner">
    
    <?php
    //Loopa kolumner
    if (have_rows('two_boxes')) {
         while(have_rows('two_boxes')) {
            the_row(); ?>
    
            <?php
            $color = get_sub_field('color_theme'); 
            $style = '';  
            $icon = get_sub_field('icon');
             
            $box_class = 'box';
             
            if (get_sub_field('image')) {
                $box_class .= ' overlay'; //punkt före!
            }
            ?>
                
                 <?php
                 if (get_sub_field('image')) { ?>
                
                            <?php 
                            $img_id = get_sub_field('image'); ?>

                            <?php
                            $style = 'style="background-image:url(\'' . wp_get_attachment_url( $img_id, 'full' ) . '\')"';

                            //echo wp_get_attachment_image($img_id, 'large');
                            ?>  
                    <?php
                    } ?>
    
                <div class="<?php echo $box_class; ?> <?php echo $color ?>" <?php echo $style; ?>>

                        <div class="text-part-outer">
                            <div class="text-part-inner">

                                 <?php
                                    if (get_sub_field('icon')) { ?>

                                        <p class="boxes-icon">
                                            <i class="fab fa-<?php echo $icon; ?>"></i>
                                            <i class="fas fa-<?php echo $icon; ?>"></i>
                                        </p>
                                <?php
                                  } ?>

                                <?php
                                if (get_sub_field('heading')) { ?>

                                    <h3><?php the_sub_field('heading'); ?></h3>

                                <?php
                                } ?>

                                <?php
                                if (get_sub_field('text')) { ?>

                                        <p><?php the_sub_field('text'); ?></p>

                                 <?php
                                } ?>

                            </div>   
                        </div>
                                            
            </div>
            <div class="overlay-hover"></div>
    
    
      <?php
      }
    }
    ?>
    </div>
</section>