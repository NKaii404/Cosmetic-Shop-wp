<?php
/**
 * Template part for displaying slider section
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'hair_spa_salon_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $hair_spa_salon_slide_pages = array();
      for ( $hair_spa_salon_count = 1; $hair_spa_salon_count <= 4; $hair_spa_salon_count++ ) {
        $hair_spa_salon_mod = intval( get_theme_mod( 'hair_spa_salon_slider_page' . $hair_spa_salon_count ));
        if ( 'page-none-selected' != $hair_spa_salon_mod ) {
          $hair_spa_salon_slide_pages[] = $hair_spa_salon_mod;
        }
      }
      if( !empty($hair_spa_salon_slide_pages) ) :
        $hair_spa_salon_args = array(
          'post_type' => 'page',
          'post__in' => $hair_spa_salon_slide_pages,
          'orderby' => 'post__in'
        );
        $hair_spa_salon_query = new WP_Query( $hair_spa_salon_args );
        if ( $hair_spa_salon_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $hair_spa_salon_query->have_posts() ) : $hair_spa_salon_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.esc_url( $static_image ).'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php if( get_theme_mod( 'hair_spa_salon_slider_short_heading' ) != '' ) { ?>
                <p class="slidetop-text"><?php echo esc_html( get_theme_mod( 'hair_spa_salon_slider_short_heading','' ) ); ?></p>
              <?php } ?>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p><?php echo esc_html( wp_trim_words( get_the_content(), 30 ) );?></p>  
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','hair-spa-salon'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Previous','hair-spa-salon'); ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Next','hair-spa-salon'); ?></span>
    </a> 
  </div>
  <div class="clearfix"></div>
</section>
<?php } ?>