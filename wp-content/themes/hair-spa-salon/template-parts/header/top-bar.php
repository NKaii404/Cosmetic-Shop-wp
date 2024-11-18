<?php 
/*
* Display Topbar
*/
?>
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 text-lg-start align-self-center">
        <div class="row">
          <div class="col-lg-3 col-4 align-self-center">
            <?php if(get_theme_mod('hair_spa_salon_cart_icon',true) != ''){ ?>
              <p class="m-0">
                <?php if(class_exists('woocommerce')){ ?>
                <span class="cartbox"><a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-basket px-lg-2"></i><span class="cart-value simplep"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count()));?></span></a>   
                </span>
                <?php } ?>
              </p>
            <?php } ?>
          </div>
          <div class="col-lg-9 col-8 text-lg-start align-self-center">
            <div class="call">
              <?php if( get_theme_mod( 'hair_spa_salon_call_text' ) != '' || get_theme_mod( 'hair_spa_salon_call' ) != '') { ?>
                <div class="row">
                  <div class="col-lg-2 col-md-4 col-4 align-self-center"><i class="fas fa-phone-volume"></i>
                  </div>
                  <div class="col-lg-10 col-md-8 col-8 align-self-center text-lg-start">
                    <p class="infotext"><?php echo esc_html( get_theme_mod('hair_spa_salon_call_text','') ); ?></p>
                    <p class="mb-0">
                      <a href="tel:<?php echo esc_html( get_theme_mod('hair_spa_salon_call','') ); ?>">
                        <?php echo esc_html( get_theme_mod('hair_spa_salon_call','') ); ?>
                      </a>
                    </p>
                  </div>
                   </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 logo-box">
        <?php $hair_spa_salon_logo_settings = get_theme_mod( 'hair_spa_salon_logo_settings','Different Line');
        if($hair_spa_salon_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) hair_spa_salon_the_custom_logo(); ?>
            <?php if( get_theme_mod('hair_spa_salon_site_title_text',true) == 1){ ?>
              <?php if (is_front_page() || is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1>
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $hair_spa_salon_description = get_bloginfo( 'description', 'display' );
            if ( $hair_spa_salon_description || is_customize_preview() ) : ?>
              <?php if( get_theme_mod('hair_spa_salon_site_tagline_text',false)){ ?>
                <p class="site-description"><?php echo esc_html($hair_spa_salon_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($hair_spa_salon_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-center">
                <?php if( has_custom_logo() ) hair_spa_salon_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-center">
                <?php if(get_theme_mod('hair_spa_salon_site_title_text',true) != ''){ ?>
                  <?php if (is_front_page() || is_home()) : ?>
                    <h1 class="text-capitalize">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1>
                  <?php else : ?>
                      <p class="text-capitalize site-title">
                          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                      </p>
                  <?php endif; ?>
                <?php }?>
                <?php $hair_spa_salon_description = get_bloginfo( 'description', 'display' );
                if ( $hair_spa_salon_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('hair_spa_salon_site_tagline_text',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($hair_spa_salon_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
        <?php get_template_part( 'template-parts/navigation/responsive', 'menu' ); ?>
      </div>
      <div class="col-lg-5 text-lg-end align-self-center">
        <div class="row">
          <div class="col-lg-9 col-8 text-lg-end align-self-center">
            <div class="email">
              <?php if( get_theme_mod( 'hair_spa_salon_mail_text' ) != '' || get_theme_mod( 'hair_spa_salon_mail' ) != '') { ?>
                <div class="row">
                  <div class="col-lg-10 col-md-8 col-8 align-self-center">
                    <p class="infotext"><?php echo esc_html( get_theme_mod('hair_spa_salon_mail_text','')); ?></p>
                    <p class="mb-0">
                      <a href="mailto:<?php echo esc_html( get_theme_mod('hair_spa_salon_mail','') ); ?>">
                        <?php echo esc_html( get_theme_mod('hair_spa_salon_mail','') ); ?>
                      </a>
                    </p>
                  </div>
                  <div class="col-lg-2 col-md-4 col-4 align-self-center">
                    <i class="fas fa-envelope-open"></i>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-4 align-self-center d-flex justify-content-center align-items-center">
        <span class="search-bar text-end">
            <button type="button" class="open-search"><i class="fas fa-search"></i></button>
        </span>
      </div>
      <div class="search-outer">
          <div class="inner_searchbox w-100 h-100">
              <?php get_search_form(); ?>
          </div>
          <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'hair-spa-salon'); ?></button>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>