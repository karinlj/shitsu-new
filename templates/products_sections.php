<?php
if (get_row_layout() == 'products_sections') { ?>

<section class="products_sections section_spacing_only_top_small">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-8">
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

                    <div class="col-md-6 col-xl-4">
                        <div class="item">
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />

                            <div class="heading_section">
                                <img class="logo" src="<?php echo $logo[0]; ?>" alt="<?php echo $alt_text_logo; ?>" />
                                <h4 class="heading"><?php echo $heading; ?></h4>
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


            <div class="col-md-4">
                <?php
                    // check if repeater field has rows
                    if (have_rows('product_sidebar')) {
                        while (have_rows('product_sidebar')) {
                            the_row();

                            $heading = get_sub_field('heading');
                            $text = get_sub_field('text');

                            $swish_logo_id = get_sub_field('swish_logo_field');
                            $swish_logo = wp_get_attachment_image_src($swish_logo_id, 'full');
                            $alt_text_swish_logo = get_post_meta($swish_logo_id, '_wp_attachment_image_alt', true);
                    ?>

                <div class="product_info section_spacing_top_mini">
                    <h3 class="heading"><?php echo $heading; ?></h3>
                    </>
                    <div class="text_part">
                        <p class="text"><?php echo $text; ?></p>
                    </div>

                    <?php if ($swish_logo_id) { ?>
                    <div class="swish_logo">
                        <img class="logo" src="<?php echo $swish_logo[0]; ?>"
                            alt="<?php echo $alt_text_swish_logo; ?>" />
                    </div>
                    <?php  } ?>
                </div>
                <?php
                        }
                    } ?>
            </div>
        </div>
    </div>
</section>
<?php
}
?>