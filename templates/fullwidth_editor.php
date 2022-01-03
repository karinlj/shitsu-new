<?php

if (get_row_layout() == 'fullwidth_editor') {
    $color = get_sub_field('color_theme'); ?>

<section class="fullwidth_editor <?php echo $color; ?>  section_spacing_top_small">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="text text-center">
                    <?php the_sub_field('text'); ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
}
?>