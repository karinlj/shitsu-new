 <?php
    /*
 * The template for displaying 404 pages (Not Found)
 */

    get_header(); ?>

 <?php
    if (function_exists('acf_add_options_page')) { ?>

     <div id="main">
         <div class="container">
             <section class="no_page section_spacing_top_small">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-8">
                             <div class="">
                                 <h2 class="nopage-heading"><?php the_field('404_heading', 'option'); ?></h2>
                                 <p class="nopage-content"> <?php the_field('404_content', 'option'); ?></p>
                             </div>

                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 <?php
    }
    ?>
 <?php get_footer(); ?>