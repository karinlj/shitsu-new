<?php
//template in header_items

if (is_front_page()) {
  $heading_class = 'header_front_heading';
} else {
  $heading_class = 'header_page_heading';
}

if (get_row_layout() == 'header_heading') {
  $heading = get_sub_field('heading'); ?>

<h1 class="<?php echo $heading_class; ?>">
    <?php echo $heading; ?>
</h1>

<?php
}
?>