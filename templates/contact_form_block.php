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

<!-- <section id="contact_form"
    class="contact_form_block <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_small"
    <?php echo $style; ?>> -->

<section id="contact_form" class="contact_form_block <?php echo $color; ?>  section_spacing_top_small">

    <div class="container">
        <div class="row">

            <div class="col-md-6">
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
            </div>

            <div class="col-md-6">
                <div class="social_container">
                    <div class="social_icons">
                        <?php
                            if (function_exists('acf_add_options_page')) {
                            ?>
                        <ul class="social">
                            <?php
                                    //repeater
                                    if (have_rows('social_icons', 'option')) {
                                        while (have_rows('social_icons', 'option')) {
                                            the_row();

                                            $social_url = get_sub_field('social_url');
                                            $social_site = get_sub_field('social_site'); ?>
                            <li class="social-item">
                                <a href="<?php echo $social_url; ?>"><i
                                        class="fab fa-<?php echo $social_site; ?>"></i></a>
                            </li>

                            <?php
                                        }
                                    } ?>
                        </ul>
                        <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                if (have_rows('editors')) {
                    while (have_rows('editors')) { ?>
            <div class="col-md-6">

                <?php the_row(); ?>

                <div class="text">
                    <?php $text = get_sub_field('text'); ?>
                    <?php echo $text; ?>
                </div>
            </div>
            <?php }
                }
                ?>


        </div>
    </div>
</section>
<?php
} ?>