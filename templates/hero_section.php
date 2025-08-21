<?php
//big hero image with text and optional linking

if (get_row_layout() == 'hero_section') {
    $style = '';
    $hero_class = 'hero_section overlay-dark';
    $hero_image = get_sub_field('hero_image');
    $hero_heading = get_sub_field('heading');
    $hero_text = get_sub_field('text');
    $hero_text_link = get_sub_field('link_text'); //linking the text

    if ($hero_image) {
        $style = 'style="background-image:url(\'' . wp_get_attachment_url($hero_image, 'full') . '\')"';
    }
} ?>

<section class="<?php echo $hero_class; ?>" <?php echo $style; ?>>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <?php
                if ($hero_text_link) { ?>
                    <a href="<?php echo $hero_text_link; ?>">
                    <?php
                }
                if ($hero_heading) { ?>
                        <h2 class="hero_heading">
                            <?php echo $hero_heading ?>
                        </h2>
                    <?php
                }
                if ($hero_text) { ?>
                        <p class="bigger_text hero_text"><?php echo $hero_text; ?></p>
                    <?php
                }
                if ($hero_text_link) { ?>
                    </a>
                <?php
                } ?>
            </div>
        </div>
    </div>
</section>