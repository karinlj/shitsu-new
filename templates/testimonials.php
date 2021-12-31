<?php

if (get_row_layout() == 'testimonials') { ?>

<section class="testimonials_section section_spacing_top_small">
    <header class="header">
        <h2 class="heading"><?php the_sub_field('heading'); ?></h2>
        <?php
            $img_id = get_sub_field('image');
            $image = wp_get_attachment_image_src($img_id, 'full');
            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

        <?php if ($img_id) {
                $text = get_sub_field('text');
                $link = get_sub_field('link');
            ?>
        <div class="reviews">
            <div class="logo">
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
            </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text"><?php echo $text; ?></p>
            <?php if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
            <a class="link" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>

            <?php } ?>
        </div>
        <?php } ?>
    </header>

    <div class="testimonials_inner">
        <div class="container">
            <div class="row align-items-start">
                <?php
                    // check if the repeater field has rows
                    if (have_rows('testimonials_content')) {
                        while (have_rows('testimonials_content')) {
                            the_row();

                            $text = get_sub_field('text');
                            $signature = get_sub_field('signature');
                    ?>
                <div class="col-12 col-lg-4">
                    <div class="item">
                        <p class="icon">
                            <i class="fas fa-quote-left"></i>
                        </p>
                        <p class="text"><?php echo $text; ?></p>
                        <p class="signature">//<?php echo $signature; ?></p>
                    </div>
                </div>
                <?php
                        }
                    } ?>
            </div>

        </div>
    </div>
</section>
<?php
} ?>