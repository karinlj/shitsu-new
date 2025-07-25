<?php
if (get_row_layout() == 'boka_och_omdomen_banner') { ?>
    <?php
    $style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>
    <section class="boka_och_omdomen_banner <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium" <?php echo $style; ?>>
        <?php
        $heading = get_sub_field('heading');
        ?>
        <h2 class="heading"><?php echo $heading; ?></h2>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <?php
                    $text = get_sub_field('text');
                    ?>
                    <div class="reviews">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h6 class="text"><?php echo $text; ?></h6>
                    </div>

                    <?php if (get_sub_field('link')) {
                        $link = get_sub_field('link');
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