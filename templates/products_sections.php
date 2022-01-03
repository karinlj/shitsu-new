<?php
if (get_row_layout() == 'products_sections') { ?>

<section class="products_sections section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-start">
            <?php
                // check if repeater field has rows
                if (have_rows('image_sections_content')) {
                    while (have_rows('image_sections_content')) {
                        the_row();

                        $heading = get_sub_field('heading');
                        $text = get_sub_field('text');

                        $img_id = get_sub_field('image');
                        $image = wp_get_attachment_image_src($img_id, 'full');
                        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                        $logo_id = get_sub_field('logo');
                        $logo = wp_get_attachment_image_src($logo_id, 'full');
                        $alt_text_logo = get_post_meta($logo_id, '_wp_attachment_image_alt', true); ?>

            <div class="col-md-6 col-lg-4">
                <div class="item">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />

                    <div class="heading_section">
                        <img class="logo" src="<?php echo $logo[0]; ?>" alt="<?php echo $alt_text_logo; ?>" />
                        <h3 class="heading"><?php echo $heading; ?></h3>
                    </div>
                    <div class="text_part">
                        <p class="text"><?php echo $text; ?></p>
                    </div>
                </div>
            </div>
            <?php
                    }
                } ?>
        </div>
    </div>
</section>
<?php
}
?>