<?php
//info sections layout for Page blocks
if (get_row_layout() == 'info_sections') { ?>

    <section class="info_sections lighturqoise section_spacing_top_medium">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                        <?php $main_heading = get_sub_field('main_heading'); ?>
            <h2 class="main_heading margin_3"><?php echo $main_heading; ?></h2>
                    <div class="row align-items-start">
                        <?php
                        // repeater field 
                        if (have_rows('info_sections_content')) {
                            while (have_rows('info_sections_content')) {
                                the_row();

                                $heading = get_sub_field('heading');
                                $text = get_sub_field('text');
                                $link = get_sub_field('link');

                                $img_id = get_sub_field('image');
                                $image = wp_get_attachment_image_src($img_id, 'full');
                                $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                                <div class="col-sm-6 col-md-4">
                                    <div class="item">

                                        <h3 class="heading"><?php echo $heading; ?></h3>
                                        <div class="text_part margin_2">
                                            <p class="text"><?php echo $text; ?></p>
                                        </div>
                                        <?php if ($img_id) {
                                        ?>
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />

                                        <?php } ?>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>