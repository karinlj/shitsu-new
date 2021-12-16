<?php

if (get_row_layout() == 'fullwidth_editor') { ?>

<section class="text_block">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

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