<footer class="footer_container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_parent section_spacing_top_medium">
                    <?php
                    if (function_exists('acf_add_options_page')) { ?>
                        <div class="container">
                            <div class="row justify-content-between">
                                <?php
                                $logo_id = get_field('logo', 'option');
                                $logo = wp_get_attachment_image_src($logo_id, 'full');
                                $alt_text = get_post_meta($logo_id, '_wp_attachment_image_alt', true); ?>
                                <div class="col-lg-1 col-xl-2">
                                    <?php if ($logo) {
                                    ?>
                                        <div class="logo">
                                            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                                                <img src="<?php echo $logo[0]; ?>" alt="<?php echo $alt_text; ?>" />
                                            </a>
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
                                            <h3 class="smaller_text footer_fields_heading"><?php the_sub_field('heading'); ?></h3>
                                            <p class="footer_fields_text"><?php the_sub_field('text'); ?></p>
                                        </div>
                                <?php
                                    }
                                } ?>

                                <div class="col-lg-2">
                                    <div class="btn_container">
                                        <?php
                                        $book_button_url = get_field('footer_booking_button_url', 'option');
                                        $footer_booking_button_text = get_field('footer_booking_button_text', 'option');

                                        if ($book_button_url) {
                                        ?>
                                            <a class="button_link dark" href="<?php echo esc_url($book_button_url); ?>" target="_blank">
                                                <?php echo esc_html($footer_booking_button_text); ?>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>

                            <div class="row justify-content-between align-items-end">

                                <div class="col-lg-2">
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

                                <div class="col-lg-6">
                                    <ul class="badges">
                                        <?php
                                        //repeater
                                        if (have_rows('footer_bages', 'option')) {
                                            while (have_rows('footer_bages', 'option')) {
                                                the_row();
                                                $img_id = get_sub_field('image');
                                                $image = wp_get_attachment_image_src($img_id, 'full');
                                                $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);  ?>
                                      
                                                <li class="badge_item">
                                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                                                </li>
                                        <?php
                                            }
                                        } ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="footer-bottom section_spacing_top_mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-10">
                                <p class="footer_copy">&copy; <?php echo Date('Y'); ?> Shiatsurummet - All rights
                                    reserved. Theme
                                    by <a href="http://frilans.karinljunggren.com/" target="_blank">KarinsWeb</a> |
                                    <span> <a href="https://shiatsurummet.se/privacy-policy/">Integritetspolicy </a></span>

                                </p>
                            </div>
                            <div class="col-2">
                                <div class="to_top">
                                    <a href="#header-new">
                                        <p title="Till toppen av sidan"></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>