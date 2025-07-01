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
                $booking_button_text = get_field('booking_button_text', 'option');
                if ($booking_button_url) {
                ?>
<<<<<<< HEAD
                    <a class="button_link dark" href="<?php echo esc_url($booking_button_url); ?>" target="_blank">
                        <?php echo esc_html($booking_button_text); ?>

                    </a>
                <?php
=======
            <a href="<?php echo esc_url($booking_button_url); ?>" target="_blank">
                <img class=" bokadirekt" src="<?php echo esc_url($booking_button_image); ?>" alt="Boka tid"
                    border="0" />
            </a>
            <?php
>>>>>>> df7981577c9545e64c2c1645abef3cfea91b8627
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

</div>