<?php
/*
* Display Theme menus
*/
?>
<div class="menubar">
	<div class="menubox col-lg-12 col-md-10 align-self-center">
		<div class="innermenubox">
	 		<div id="mySidenav" class="nav left-menu">
				<nav id="site-navigation-new1" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Left Side Menu', 'hair-spa-salon' ); ?>">
	              	<?php 
	                  	wp_nav_menu( array(
		                    'theme_location' => 'primary-1',
		                    'container_class' => 'main-menu clearfix' ,
		                    'menu_class' => 'clearfix',
		                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                    'fallback_cb' => 'wp_page_menu',
	                  	) );
	              	?>
	    		</nav>
	  		</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>