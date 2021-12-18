<?php
//template in header_items

if (get_row_layout() == 'header_text') {
    $text = get_sub_field('text'); ?>

<p class="header_text"> <?php echo $text; ?></p>

<?php
}
?>