<?php
if (get_row_layout() == 'focus_text') {
    $color = get_sub_field('color_theme');
?>

<section class="focus_text <?php echo $color; ?> section_spacing_top_mini">

    <div class="container">
        <div class="row">
                <div class="col-xl-10 offset-xl-1">
                <header class="header">
                    <?php if (get_sub_field('heading')) { ?>
                    <h2 class="heading">
                        <?php the_sub_field('heading'); ?>
                    </h2>
                    <?php  } ?>
                </header>
                <?php if (get_sub_field('text')) { ?>
                <p class="text">
                    <?php the_sub_field('text'); ?>
                </p>
                <?php  } ?>
            </div>
        </div>
    </div>
</section>
<?php
}
?>