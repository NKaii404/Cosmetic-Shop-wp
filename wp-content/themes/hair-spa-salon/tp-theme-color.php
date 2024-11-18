<?php

$hair_spa_salon_tp_theme_css = '';

//theme-color
$hair_spa_salon_tp_color_option = get_theme_mod('hair_spa_salon_tp_color_option');

if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.more-btn a, .box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,.toggle-nav i, #return-to-top,.error-404 [type="submit"],#slider h6,.news-detail:after,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.woocommerce span.onsale,wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a, .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,.category-dropdown::-webkit-scrollbar-thumb,.category-dropdown::-webkit-scrollbar,.category-dropdown::-webkit-scrollbar-track,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before, .headerbox, span.cart-value.simplep, #services, .service-box-content i, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
$hair_spa_salon_tp_theme_css .='background-color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.main-navigation .current_page_item > a,.page-box h4 a,.readmore-btn a,.box-content a ,.woocommerce-message::before ,.logo a, .logo p ,theme-sidebar .wp-block-search .wp-block-search__label,#theme-sidebar h2.wp-block-heading,.main-navigation .current-menu-item > a,.timebox i,.box-info i,.content-area a,a.added_to_cart.wc-forward, #slider .inner_carousel h1 a:hover, .service-box-content h3 a:hover, .call p a:hover, .email p a:hover, .logo h1 a:hover, .logo p a:hover{';
$hair_spa_salon_tp_theme_css .='color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='.main-navigation .current_page_item > a,.wp-block-quote:not(.is-large):not(.is-style-large),.readmore-btn a{';
	$hair_spa_salon_tp_theme_css .='border-color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='.page-box,#theme-sidebar section {';
    $hair_spa_salon_tp_theme_css .='border-left-color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='.page-box,#theme-sidebar section {';
    $hair_spa_salon_tp_theme_css .='border-bottom-color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='@media screen and (max-width:1000px){';
		$hair_spa_salon_tp_theme_css .='.nav ul li a:hover,.main-navigation ul ul li:hover > a {';
			$hair_spa_salon_tp_theme_css .='color: '.esc_attr($hair_spa_salon_tp_color_option).';';
		$hair_spa_salon_tp_theme_css .='} }';
}
if($hair_spa_salon_tp_color_option != false){
$hair_spa_salon_tp_theme_css .='.woocommerce-message, .logo{';
$hair_spa_salon_tp_theme_css .='border-top-color: '.esc_attr($hair_spa_salon_tp_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}
$hair_spa_salon_tp_color_option_link = get_theme_mod('hair_spa_salon_tp_color_option_link');

if($hair_spa_salon_tp_color_option_link != false){
$hair_spa_salon_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover,span.meta-nav:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.book-tkt-btn a.bar-btn i:hover,.more-btn a:hover,.more-btn a:hover{';
	$hair_spa_salon_tp_theme_css .='background: '.esc_attr($hair_spa_salon_tp_color_option_link).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option_link != false){
$hair_spa_salon_tp_theme_css .='a:hover,#theme-sidebar a:hover,#footer li a:hover,.media-links i:hover ,.page-box h4 a:hover,.readmore-btn a:hover, #theme-sidebar .widget_tag_cloud a:hover,#theme-sidebar .tagcloud a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$hair_spa_salon_tp_theme_css .='color: '.esc_attr($hair_spa_salon_tp_color_option_link).';';
$hair_spa_salon_tp_theme_css .='}';
}
if($hair_spa_salon_tp_color_option_link != false){
$hair_spa_salon_tp_theme_css .='#footer .tagcloud a:hover,.wp-block-tag-cloud a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$hair_spa_salon_tp_theme_css .='border-color: '.esc_attr($hair_spa_salon_tp_color_option_link).';';
$hair_spa_salon_tp_theme_css .='}';
}
$hair_spa_salon_tp_footer_bg_color_option = get_theme_mod('hair_spa_salon_tp_footer_bg_color_option');


if($hair_spa_salon_tp_footer_bg_color_option != false){
$hair_spa_salon_tp_theme_css .='#footer{';
	$hair_spa_salon_tp_theme_css .='background: '.esc_attr($hair_spa_salon_tp_footer_bg_color_option).';';
$hair_spa_salon_tp_theme_css .='}';
}

// logo tagline color
$hair_spa_salon_site_tagline_color = get_theme_mod('hair_spa_salon_site_tagline_color');

if($hair_spa_salon_site_tagline_color != false){
$hair_spa_salon_tp_theme_css .='.logo h1 a, .logo p a{';
$hair_spa_salon_tp_theme_css .='color: '.esc_attr($hair_spa_salon_site_tagline_color).';';
$hair_spa_salon_tp_theme_css .='}';
}

$hair_spa_salon_logo_tagline_color = get_theme_mod('hair_spa_salon_logo_tagline_color');
if($hair_spa_salon_logo_tagline_color != false){
$hair_spa_salon_tp_theme_css .='p.site-description{';
$hair_spa_salon_tp_theme_css .='color: '.esc_attr($hair_spa_salon_logo_tagline_color).';';
$hair_spa_salon_tp_theme_css .='}';
}