<?php
//info sections layout for Page blocks
if (get_row_layout() == 'info_sections') {

    $color = get_sub_field('color_theme');
    $items_height_class = '';
    $col_class = 'col';
    $row_class = 'row';
    $centered_text_class = '';

    $narrow_field = get_sub_field('narrow_field');
    if ($narrow_field == 'yes') {
        $col_class = 'col-md-10 offset-md-1';
    }

    $items_same_height = get_sub_field('items_same_height');
    if ($items_same_height == 'yes') {
        $items_height_class = 'same_height';
    }

    $centered_fields = get_sub_field('centered_fields');
    if ($centered_fields == 'yes') {
        $centered_text_class = 'centered_text';
        $row_class = 'row justify-content-center';
    } ?>

    <section class="info_sections <?php echo $color; ?> <?php echo $items_height_class; ?> section_spacing_top_medium">
        <div class="container">
            <div class="row">
                <div class="<?php echo $col_class; ?> ">

                    <section class="heading_section <?php echo $centered_text_class; ?> margin_4">
                        <?php $main_heading = get_sub_field('main_heading'); ?>
                        <?php $preamble = get_sub_field('preamble'); ?>

                        <h2 class="main_heading"><?php echo $main_heading; ?></h2>
                        <?php if ($preamble) {
                        ?>
                            <p class="preamble"><?php echo $preamble; ?></p>
                        <?php } ?>

                    </section>

                    <div class="<?php echo $row_class; ?>">
                        <?php
                        // repeater field 
                        if (have_rows('info_sections_content')) {
                            while (have_rows('info_sections_content')) {
                                the_row();

                                $heading = get_sub_field('heading');
                                $text = get_sub_field('text');
                                $link = get_sub_field('link');

                                $img_id = get_sub_field('image');
                                $image = wp_get_attachment_image_src($img_id, 'full');
                                $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="item">

                                        <h3 class="heading <?php echo $centered_text_class; ?> "><?php echo $heading; ?></h3>
                                        <div class="text_part">
                                            <p class="text"><?php echo $text; ?></p>
                                        </div>
                                        <?php if ($img_id) {
                                        ?>
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>