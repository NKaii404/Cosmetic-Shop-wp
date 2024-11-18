<?php
/**
 * Template part for displaying services section
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

?>
<?php if( get_theme_mod( 'hair_spa_salon_services_section_show_hide') != '') { ?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<section id="services"slider-loop="<?php echo esc_html(get_theme_mod('hair_spa_salon_slider_loop')); ?>">
  <div class="container">
    <?php if( get_theme_mod( 'hair_spa_salon_services_short_heading' ) != '' ) { ?>
      <p><?php echo esc_html( get_theme_mod( 'hair_spa_salon_services_short_heading','' ) ); ?></p>
    <?php } ?>
    <?php if( get_theme_mod('hair_spa_salon_services_tittle') != ''){ ?>
      <h2 class="text-center pb-3"><?php echo esc_html(get_theme_mod('hair_spa_salon_services_tittle','')); ?></h2>
    <?php }?>
    <div class="row text-center">
      <div class="owl-carousel">
      <?php $category = get_theme_mod('hair_spa_salon_category_increament');
      for ($i=1; $i <= $category; $i++) { ?>
          <div class="category-inner-box mb-4">
            <div class="service-img-box">
              <?php if( get_theme_mod('hair_spa_salon_service_image'.$i) != '' ){ ?>
                <img src="<?php echo esc_url(get_theme_mod('hair_spa_salon_service_image'.$i)); ?>">
              <?php }?>
            </div>
            <div class="service-box-content">
              <?php if( get_theme_mod('hair_spa_salon_category_box_icon'.$i) != '' ){ ?>
                <i class="<?php echo esc_html(get_theme_mod('hair_spa_salon_category_box_icon'.$i)); ?>"></i>
              <?php }?>
              <?php if( get_theme_mod('hair_spa_salon_category_box_title'.$i) != '' ){ ?>
              <h3><a href="<?php echo esc_url(get_theme_mod('hair_spa_salon_category_box_title_url'.$i)); ?>"><?php echo esc_html(get_theme_mod('hair_spa_salon_category_box_title'.$i)); ?></a></h3>
              <?php }?>  
            </div>        
          </div>
      <?php } ?>
    </div>
    </div>
  </div>
</section>
<?php } ?>