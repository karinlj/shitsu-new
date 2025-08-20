<?php
// info_banner layout for  Pages Content block
if (get_row_layout() == 'info_banner') { ?>
    <?php
    $style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>

    <section class="info_banner <?php echo $color; ?> <?php echo $overlay_color; ?> text_center section_spacing_top_medium"
        <?php echo $style; ?>>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-xl-6">
                    <?php
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text');
                    ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
                    <p class="bigger_text margin_2"><?php echo $text; ?></p>

                    <?php
                    $link = get_sub_field('button_link');
                    $file_upload = get_sub_field('file_upload');

                    if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <div class="btn_wrapper">
                            <a href="<?php echo esc_url($link_url); ?>" rel="noopener norefferer" target='_blank'
                                class="button_link dark">
                                <?php echo esc_html($link_title); ?></a>
                    <?php } 

                    if ($file_upload) { ?>

                            <a href="<?php echo $file_upload['url']; ?>" class="button_link dark"><?php echo $file_upload['filename']; ?></a>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </section>
<?php
} ?>