<?php
// contact_form_block
if (get_row_layout() == 'contact_form_block') {

    $color = get_sub_field('color_theme');
?>

<section id="contact_form" class="contact_form_block <?php echo $color; ?>  section_spacing_top_small">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="social_icons_container">
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

                <h2 class="text-heading">
                    <?php the_sub_field('heading'); ?>
                </h2>

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