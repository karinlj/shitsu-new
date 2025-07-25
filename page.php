<?php
/*
Template name:  Page
Description:  Page
 */
?>
<?php get_header(); ?>

<div id="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php //layouts of page_blocks - Flex content

        //Loopa ACF flex Content
        if (function_exists('have_rows')) {

          if (have_rows('page_blocks')) {
            while (have_rows('page_blocks')) {
              the_row();

              $layout = get_row_layout();
              // load layout from the templates folder
              get_template_part('templates/' . $layout);
            }
          }
        } ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>