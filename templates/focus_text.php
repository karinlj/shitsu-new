<?php
if (get_row_layout() == 'focus_text') {
    $color = get_sub_field('color_theme');
?>

<section class="focus_text <?php echo $color; ?> section_spacing_top_mini">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <header class="header">
                    <?php if (get_sub_field('heading')) { ?>
                    <h3 class="heading">
                        <?php the_sub_field('heading'); ?>
                    </h3>
                    <?php  } ?>

                </header>
                <?php if (get_sub_field('text')) { ?>
                <h5 class="text">
                    <?php the_sub_field('text'); ?>
                </h5>
                <?php  } ?>
            </div>
        </div>
    </div>
</section>
<?php
}
?>