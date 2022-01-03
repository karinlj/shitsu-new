<footer class="footer_container">
    <div class="footer_parent section_spacing_top_medium">
        <?php
        if (function_exists('acf_add_options_page')) { ?>
        <div class="container">
            <div class="row">
                <?php
                    $logo_id = get_field('logo', 'option');
                    $logo = wp_get_attachment_image_src($logo_id, 'full');
                    $alt_text = get_post_meta($logo_id, '_wp_attachment_image_alt', true); ?>
                <div class="col-lg-1 col-xl-2">
                    <?php if ($logo) {
                        ?>
                    <div class="logo">
                        <img src="<?php echo $logo[0]; ?>" alt="<?php echo $alt_text; ?>" />
                    </div>
                    <?php
                        }
                        ?>
                </div>

                <?php
                    //repeater
                    if (have_rows('footer_fields', 'option')) {
                        while (have_rows('footer_fields', 'option')) {
                            the_row(); ?>
                <div class="col-lg-3 col-xl-2">
                    <h5 class="footer-fields-heading"><?php the_sub_field('heading'); ?></h5>
                    <p class="footer-fields-text"><?php the_sub_field('text'); ?></p>
                </div>
                <?php
                        }
                    } ?>

                <div class="col-lg-2 col-xl-2">
                    <div class="btn_container">
                        <?php
                            $book_button_url = get_field('footer_booking_button_url', 'option');
                            $book_image_url = get_field('footer_booking_button_image', 'option');
                            if ($book_button_url) {
                            ?>
                        <a href="<?php echo esc_url($book_button_url); ?>" target="_blank">
                            <img class="bokadirekt" src="<?php echo esc_url($book_image_url); ?>" alt="Boka tid"
                                border="0" />
                        </a>
                        <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="social_icons_container">
                        <div class="social_icons">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="footer-bottom">
        <p class="footer-copy">&copy; <?php echo Date('Y'); ?> Shiatsurummet - All rights reserved.</p>
        <a href="#header-new">
            <p class="to-top" title="Till toppen av sidan"></p>
        </a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>