<?php
/**
 * Created by PhpStorm.
 * User: Karin
 * Date: 2018-06-14
 * Time: 20:34
 */

/*
$img_id = get_sub_field('hero_image');

$img_url = wp_get_attachment_image_url($img_id, 'full');

$hero_text = get_field( 'hero_image');
$hero_text_link = get_field( 'url');*/

$hero_image = '';
$hero_text = '';
$url = '';
$style = '';

$hero_class = 'hero-section';

    if (get_sub_field('overlay')) {
        $hero_class .= ' overlay'; //punkt före!
    }
    //background image
    if ( get_sub_field ( 'hero_image' ) ) {
        $hero_image = get_sub_field ( 'hero_image' );
        $hero_text = get_sub_field( 'hero_text');
        $hero_text_link = get_sub_field( 'url');  //linking the text 
    }

     if ( $hero_image ) {
         $style = 'style="background-image:url(\'' . wp_get_attachment_url( $hero_image, 'full' ) . '\')"';
    }
?>


<!--<section class="<?php echo $hero_class; ?>" <?php echo $style; ?>>-->
<section class="<?php echo $hero_class; ?>">
  <div class="page-bg-zoom" <?php echo $style; ?>></div>
  <!--extra div for header image zoom onload-->


  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php
                              if ( $hero_text_link) { ?>
        <a href="<?php echo $hero_text_link; ?>">
          <?php
                                  }
                                  if ($hero_text) {
                                      ?>
          <h2 class="hero-text">
            <?php echo $hero_text ?>
          </h2>
          <?php
                                  }

                                  if ( $hero_text_link) { ?>
        </a>
        <?php
                          }
                          ?>

      </div>

    </div>
  </div>
</section>
