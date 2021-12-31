<?php
if (get_row_layout() == 'image_sections') { ?>

<section class="image_sections section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-start justify-content-around">
            <?php
                // check if repeater field has rows
                if (have_rows('image_sections_content')) {
                    while (have_rows('image_sections_content')) {
                        the_row();

                        $heading = get_sub_field('heading');
                        $text = get_sub_field('text');

                        $img_id = get_sub_field('image');
                        $image = wp_get_attachment_image_src($img_id, 'full');
                        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

            <div class="col">
                <div class="item">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />

                    <h2 class="heading"><?php echo $heading; ?></h2>
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