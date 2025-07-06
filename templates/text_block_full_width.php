<?php
//template for page blocks
if (get_row_layout() == 'text_block_full_width') {
    $color = get_sub_field('color_theme');
?>

<section class="text_block_full_width <?php echo $color; ?> section_spacing_top_small">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="header">
                    <?php if (get_sub_field('heading')) { ?>
                    <h2 class="heading">
                        <?php the_sub_field('heading'); ?>
                    </h2>
                    <?php  } ?>
                    <?php if (get_sub_field('preamble')) { ?>
                    <h5 class="preamble">
                        <?php the_sub_field('preamble'); ?>
                    </h5>
                    <?php  } ?>
                </header>
                <?php if (get_sub_field('text')) { ?>
                <div class="text">
                    <?php the_sub_field('text'); ?>
                </div>
                <?php  } ?>

            </div>
        </div>
    </div>
</section>
<?php
}
?>