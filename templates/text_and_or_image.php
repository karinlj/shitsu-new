<?php
if (get_row_layout() == 'text_and_or_image') {

    $color = get_sub_field('color_theme');

?>
<section class="text_and_or_image <?php echo $color; ?> section_spacing_top_small">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">

                <div class="part_container">
                    <?php
                        //Loopa kolumner
                        if (have_rows('two_columns_block_content')) {
                            while (have_rows('two_columns_block_content')) {
                                the_row();

                                if (get_row_layout() == 'image_part') {

                                    $img_id = get_sub_field('image');
                                    $image = wp_get_attachment_image_src($img_id, 'full');
                                    $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                    <!-- <div class="col-12 col-md-5 image_part"> -->
                    <div class="image_part">

                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                    </div>

                    <?php   }
                                if (get_row_layout() == 'text_part') {

                                    $heading = get_sub_field('heading');
                                    $content = get_sub_field('content');    ?>

                    <!-- <div class="col-12 col-md-6 text_part"> -->
                    <div class="text_part">

                        <h2 class="heading"><?php echo $heading; ?></h2>
                        <?php if (get_sub_field('preamble')) { ?>
                        <h5>
                            <?php the_sub_field('preamble'); ?>
                        </h5>
                        <?php  } ?>

                        <p class="content"><?php echo $content; ?></p>
                    </div>

                    <?php  }
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} ?>