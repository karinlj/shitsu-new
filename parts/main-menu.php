<nav class="nav_desktop">
    <span class="site_title">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/shiatsu_logo.png"
                width="400" height="" alt="Shiatsu logo" /> -->
            ShiatsuRummet
        </a>
    </span>
    <div class="nav_links">
        <?php wp_nav_menu(); ?>

        <?php
        if (function_exists('acf_add_options_page')) {
        ?>
            <div class="booking_btn">
                <?php
                $booking_button_url = get_field('booking_button_url', 'option');
                $booking_button_text = get_field('booking_button_text', 'option');
                if ($booking_button_url) {
                ?>
                    <a class="button_link dark" href="<?php echo esc_url($booking_button_url); ?>" target="_blank">
                        <?php echo esc_html($booking_button_text); ?>
                    </a>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>
    <!--hamburger-->
    <div class="toggle_btn">
        <div></div>
    </div>
</nav>

<div class="nav_mobile">
    <div class="nav_links">
        <?php wp_nav_menu(); ?>

        <?php
        if (function_exists('acf_add_options_page')) {
        ?>
            <div class="booking_btn">
                <?php
                $booking_button_url = get_field('booking_button_url', 'option');
                $booking_button_text = get_field('booking_button_text', 'option');
                if ($booking_button_url) {
                ?>
                    <a class="button_link" href="<?php echo esc_url($booking_button_url); ?>" target="_blank">
                        <?php echo esc_html($booking_button_text); ?>

                    </a>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>

</div>