<?php

$color = get_sub_field('color_theme'); 

?>
<section class="boxes-section <?php echo $color; ?>">
    
   <h2 class="section-heading text-center"><?php the_sub_field('heading'); ?></h2>
    
    <div class="boxes-inner">
        <div class="container">
           <?php
                // check if the repeater field has rows
                if( have_rows('boxes_row') ){

                    while ( have_rows('boxes_row') ) {
                        the_row();
                        ?>

                        <div class="row align-items-start">
                                <?php
                                // check if the repeater field has rows
                                if( have_rows('boxes_content') ){

                                    while ( have_rows('boxes_content') ) {
                                        the_row(); 

                                        $icon = get_sub_field('icon');
                                        $col_class = 'col-12 col-lg-4';

                                        if (get_sub_field('columns_wide') == 'large') {
                                                $col_class = 'col-12 col-lg-8';
                                        }
                                        ?>
         
                                        <div class="<?php echo $col_class; ?>">

                                            <div class="boxes-item">

                                                <p class="boxes-icon">
                                                        <i class="fa fa-<?php echo $icon; ?>"></i>
                                                </p>

                                                <h3 class="heading"><?php the_sub_field('heading'); ?></h3>

                                                <p class="text"><?php the_sub_field('text'); ?></p>
                                            </div>
                                        </div>
         
                                   <?php  
                                    }
                                }
                                ?>

                            </div>

                <?php  
                    }
                }
                ?>
            </div>
         </div>
</section>
