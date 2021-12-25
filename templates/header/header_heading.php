<?php
//template in header_items

if (get_row_layout() == 'header_heading') {
  $heading = get_sub_field('heading'); ?>

<h1 class="header_heading">
    <?php echo $heading; ?>
</h1>

<?php
}
?>