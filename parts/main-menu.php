<nav class="nav_desktop">
    <h2 class="site_title">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            ShiatsuRummet
        </a>
    </h2>
    <div class="nav_links">
        <?php wp_nav_menu(); ?>

        <?php
        if (function_exists('acf_add_options_page')) {
        ?>
        <div class="booking_btn">
            <?php
                $booking_button_url = get_field('booking_button_url', 'option');
                $booking_button_image = get_field('booking_button_image', 'option');
                if ($booking_button_image) {
                ?>
            <a href="<?php echo esc_url($booking_button_url); ?>" target="_blank">
                <img class=" bokadirekt" src="<?php echo esc_url($booking_button_image); ?>" alt="Boka tid"
                    border="0" />
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

        <div class="booking_btn">
            <a href="<?php echo get_theme_mod('custom-link-booking-url'); ?>" title="bokadirekt" target="_blank">

                <img class="bokadirekt" src="https://foretag.bokadirekt.se/bokatid/BokaTid_Gron_MorkBakgrund_120px.png"
                    alt="Boka tid" border="0" />
            </a>
        </div>
    </div>

</div>