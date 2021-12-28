<?php
// contact_form_block
if (get_row_layout() == 'contact_form_block') {

    $style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
?>

<section id="contact_form"
    class="contact_form_block <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_small"
    <?php echo $style; ?>>

    <div class="container">
        <!-- <div class="row justify-content-center"> -->
        <div class="row">

            <div class="col-md-8">
                <header class="text-header">
                    <h2 class="text-heading">
                        <?php the_sub_field('heading'); ?>
                    </h2>
                    <div class="preamble">
                        <?php if (get_sub_field('preamble')) { ?>
                        <p><?php the_sub_field('preamble'); ?></p>

                        <?php } ?>
                    </div>
                </header>
                <div class="text">
                    <?php if (get_sub_field('text')) { ?>
                    <?php the_sub_field('text'); ?>
                    <?php
                        } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
} ?>