<?php
// testimonials layout for Front Page Blocks
if (get_row_layout() == 'testimonials') { ?>

<section class="testimonials_section section_spacing_top_small">
    <h2 class="heading"><?php the_sub_field('heading'); ?></h2>

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