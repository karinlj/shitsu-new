<?php
if (get_row_layout() == 'pdf_section') { ?>
<?php
    $color = get_sub_field('color_theme');
    $style = '';
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>

<section class="pdf_section <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium"
    <?php echo $style; ?>>
    <?php
        $part_of_url = get_sub_field('part_of_url');
        $link_text = get_sub_field('link_text');
        $heading = get_sub_field('heading');
        $text = get_sub_field('text');

        ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-6">
                <?php if ($heading) { ?>
                <h2 class="heading">
                    <?php echo $heading ?>
                </h2>
                <?php
                    }
                    if ($text) { ?>
                <h5 class=""><?php echo $text; ?></h5>

                <?php
                    }
                    if ($part_of_url && $link_text) { ?>

                <div class="btn_wrapper">
                    <a href="<?php echo get_bloginfo('template_url') . '/'; ?><?php echo esc_url($part_of_url); ?>"
                        rel="noopener norefferer" target='_blank' class="button_link dark">
                        <?php echo esc_html($link_text); ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
}
?>