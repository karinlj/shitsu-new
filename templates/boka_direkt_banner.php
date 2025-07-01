<?php
if (get_row_layout() == 'boka_direkt_banner') { ?>
    <?php
    $style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>
    <section class="boka_direkt_banner <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium" <?php echo $style; ?>>
        <?php
        $heading = get_sub_field('heading');
        ?>
        <h2 class="heading"><?php echo $heading; ?></h2>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <?php
                    $img_id = get_sub_field('image');
                    $image = wp_get_attachment_image_src($img_id, 'full');
                    $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                    <?php if ($img_id) {
                        $text = get_sub_field('text');
                        // $link = get_sub_field('link');
                    ?>
                        <div class="reviews">
                            <div class="logo">
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                            </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h6 class="text"><?php echo $text; ?></h6>
                        </div>
                    <?php } ?>
                    <?php if (get_sub_field('link')) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                         <div class="btn_wrapper">
                        <a class="button_link dark" href="<?php echo esc_url($link_url); ?>" target="_blank"
                            rel="noopener norefferer">
                            <?php echo esc_html($link_title); ?></a>
                    </div>
                    <?php } ?>
               
                </div>
            </div>
        </div>
    </section>
<?php
} ?>