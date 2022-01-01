<?php
if (get_row_layout() == 'three_sections') { ?>

<section class="three_sections section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-start justify-content-around">
            <?php
                // check if repeater field has rows
                if (have_rows('three_sections_content')) {
                    while (have_rows('three_sections_content')) {
                        the_row();

                        $heading = get_sub_field('heading');
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');

                        $img_id = get_sub_field('image');
                        $image = wp_get_attachment_image_src($img_id, 'full');
                        $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

            <div class="col-lg-4">
                <div class="item">

                    <?php if ($link) {
                                    $link_url = $link['url'];
                                ?>
                    <a href="<?php echo esc_url($link_url); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                    </a>
                    <?php } ?>

                    <h2 class="heading"><?php echo $heading; ?></h2>
                    <div class="text_part">
                        <p class="text"><?php echo $text; ?></p>

                        <?php
                                    if ($link) {
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                    ?>
                        <a class="button_link dark" href="<?php echo esc_url($link_url); ?>">
                            <?php echo esc_html($link_title); ?></a>
                        <?php } ?>
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