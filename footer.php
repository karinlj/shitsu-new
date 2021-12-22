<footer class="footer_container">
    <div class="footer-parent-social">
        <div class="social-icons">
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
                    <a href="<?php echo $social_url; ?>"><i class="fab fa-<?php echo $social_site; ?>"></i></a>
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

    <?php
    if (function_exists('acf_add_options_page')) { ?>

    <div class="footer-parent">
        <?php
            //repeater
            if (have_rows('footer_links', 'option')) {
                while (have_rows('footer_links', 'option')) {
                    the_row(); ?>
        <div class="footer-child">
            <h5 class="footer-fields-heading"><?php the_sub_field('heading'); ?></h5>
            <p class="footer-fields-text"><?php the_sub_field('text'); ?></p>
        </div>
        <?php
                }
            } ?>
    </div>
    <?php
    }
    ?>

    <?php
    if (function_exists('acf_add_options_page')) {
    ?>
    <div class="footer-parent booking">
        <div class="footer-child">
            <div class="footer-list">
                <?php
                    $book_button_url = get_field('footer_booking_button_url', 'option');
                    $book_image_url = get_field('footer_booking_button_image', 'option');
                    if ($book_button_url) {
                    ?>
                <a href="<?php echo esc_url($book_button_url); ?>" target="_blank">
                    <img class=" bokadirekt" src="<?php echo esc_url($book_image_url); ?>" alt="Boka tid" border="0" />
                </a>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>

    <?php
    }
    ?>
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