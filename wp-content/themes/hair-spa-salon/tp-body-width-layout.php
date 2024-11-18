<?php

$hair_spa_salon_tp_theme_css = '';

	$hair_spa_salon_theme_lay = get_theme_mod( 'hair_spa_salon_tp_body_layout_settings','Full');
    if($hair_spa_salon_theme_lay == 'Container'){
		$hair_spa_salon_tp_theme_css .='body{';
			$hair_spa_salon_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$hair_spa_salon_tp_theme_css .='}';
		$hair_spa_salon_tp_theme_css .='@media screen and (max-width:575px){';
		$hair_spa_salon_tp_theme_css .='body{';
			$hair_spa_salon_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$hair_spa_salon_tp_theme_css .='} }';
		$hair_spa_salon_tp_theme_css .='.scrolled{';
			$hair_spa_salon_tp_theme_css .='width: auto; left:0; right:0;';
		$hair_spa_salon_tp_theme_css .='}';
	}else if($hair_spa_salon_theme_lay == 'Container Fluid'){
		$hair_spa_salon_tp_theme_css .='body{';
			$hair_spa_salon_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$hair_spa_salon_tp_theme_css .='}';
		$hair_spa_salon_tp_theme_css .='@media screen and (max-width:575px){';
		$hair_spa_salon_tp_theme_css .='body{';
			$hair_spa_salon_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$hair_spa_salon_tp_theme_css .='} }';
		$hair_spa_salon_tp_theme_css .='.scrolled{';
			$hair_spa_salon_tp_theme_css .='width: auto; left:0; right:0;';
		$hair_spa_salon_tp_theme_css .='}';
	}else if($hair_spa_salon_theme_lay == 'Full'){
		$hair_spa_salon_tp_theme_css .='body{';
			$hair_spa_salon_tp_theme_css .='max-width: 100%;';
		$hair_spa_salon_tp_theme_css .='}';
	}

	$hair_spa_salon_scroll_position = get_theme_mod( 'hair_spa_salon_scroll_top_position','Right');
	if($hair_spa_salon_scroll_position == 'Right'){
		$hair_spa_salon_tp_theme_css .='#return-to-top{';
			$hair_spa_salon_tp_theme_css .='right: 20px;';
		$hair_spa_salon_tp_theme_css .='}';
	}else if($hair_spa_salon_scroll_position == 'Left'){
		$hair_spa_salon_tp_theme_css .='#return-to-top{';
			$hair_spa_salon_tp_theme_css .='left: 20px;';
		$hair_spa_salon_tp_theme_css .='}';
	}else if($hair_spa_salon_scroll_position == 'Center'){
		$hair_spa_salon_tp_theme_css .='#return-to-top{';
			$hair_spa_salon_tp_theme_css .='right: 50%;left: 50%;';
		$hair_spa_salon_tp_theme_css .='}';
	}

// site title and tagline font size option
$hair_spa_salon_site_title_font_size = get_theme_mod('hair_spa_salon_site_title_font_size', 30);{
$hair_spa_salon_tp_theme_css .='.logo h1 a, .logo p a{';
$hair_spa_salon_tp_theme_css .='font-size: '.esc_attr($hair_spa_salon_site_title_font_size).'px;';
	$hair_spa_salon_tp_theme_css .='}';
}

$hair_spa_salon_site_tagline_font_size = get_theme_mod('hair_spa_salon_site_tagline_font_size', 15);{
$hair_spa_salon_tp_theme_css .='.logo p{';
$hair_spa_salon_tp_theme_css .='font-size: '.esc_attr($hair_spa_salon_site_tagline_font_size).'px;';
	$hair_spa_salon_tp_theme_css .='}';
}

// related post
$hair_spa_salon_related_post_mob = get_theme_mod('hair_spa_salon_related_post_mob', true);
$hair_spa_salon_related_post = get_theme_mod('hair_spa_salon_remove_related_post', true);
$hair_spa_salon_tp_theme_css .= '.related-post-block {';
if ($hair_spa_salon_related_post == false) {
    $hair_spa_salon_tp_theme_css .= 'display: none;';
}
$hair_spa_salon_tp_theme_css .= '}';
$hair_spa_salon_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($hair_spa_salon_related_post == false || $hair_spa_salon_related_post_mob == false) {
    $hair_spa_salon_tp_theme_css .= '.related-post-block { display: none; }';
}
$hair_spa_salon_tp_theme_css .= '}';

// slider btn
$hair_spa_salon_slider_button_mob = get_theme_mod('hair_spa_salon_slider_button_mob', true);
$hair_spa_salon_slider_button = get_theme_mod('hair_spa_salon_slider_button', true);
$hair_spa_salon_tp_theme_css .= '#slider .more-btn {';
if ($hair_spa_salon_slider_button == false) {
    $hair_spa_salon_tp_theme_css .= 'display: none;';
}
$hair_spa_salon_tp_theme_css .= '}';
$hair_spa_salon_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($hair_spa_salon_slider_button == false || $hair_spa_salon_slider_button_mob == false) {
    $hair_spa_salon_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$hair_spa_salon_tp_theme_css .= '}';

//return to header mobile				
$hair_spa_salon_return_to_header_mob = get_theme_mod('hair_spa_salon_return_to_header_mob', true);
$hair_spa_salon_return_to_header = get_theme_mod('hair_spa_salon_return_to_header', true);
$hair_spa_salon_tp_theme_css .= '.return-to-header{';
if ($hair_spa_salon_return_to_header == false) {
    $hair_spa_salon_tp_theme_css .= 'display: none;';
}
$hair_spa_salon_tp_theme_css .= '}';
$hair_spa_salon_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($hair_spa_salon_return_to_header == false || $hair_spa_salon_return_to_header_mob == false) {
    $hair_spa_salon_tp_theme_css .= '.return-to-header{ display: none; }';
}
$hair_spa_salon_tp_theme_css .= '}';


$hair_spa_salon_footer_widget_image = get_theme_mod('hair_spa_salon_footer_widget_image');
	if($hair_spa_salon_footer_widget_image != false){
		$hair_spa_salon_tp_theme_css .='#footer{';
			$hair_spa_salon_tp_theme_css .='background: url('.esc_attr($hair_spa_salon_footer_widget_image).');';
		$hair_spa_salon_tp_theme_css .='}';
	}

	$hair_spa_salon_related_product = get_theme_mod('hair_spa_salon_related_product',true);
		if($hair_spa_salon_related_product == false){
			$hair_spa_salon_tp_theme_css .='.related.products{';
				$hair_spa_salon_tp_theme_css .='display: none;';
			$hair_spa_salon_tp_theme_css .='}';
		}

//menu font size
$hair_spa_salon_menu_font_size = get_theme_mod('hair_spa_salon_menu_font_size', 15);{
$hair_spa_salon_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$hair_spa_salon_tp_theme_css .='font-size: '.esc_attr($hair_spa_salon_menu_font_size).'px;';
$hair_spa_salon_tp_theme_css .='}';
}



// menu text transform
$hair_spa_salon_menu_text_tranform = get_theme_mod( 'hair_spa_salon_menu_text_tranform','Uppercase');
if($hair_spa_salon_menu_text_tranform == 'Uppercase'){
$hair_spa_salon_tp_theme_css .='.main-navigation a {';
	$hair_spa_salon_tp_theme_css .='text-transform: uppercase;';
$hair_spa_salon_tp_theme_css .='}';
}else if($hair_spa_salon_menu_text_tranform == 'Lowercase'){
$hair_spa_salon_tp_theme_css .='.main-navigation a {';
	$hair_spa_salon_tp_theme_css .='text-transform: lowercase;';
$hair_spa_salon_tp_theme_css .='}';
}
else if($hair_spa_salon_menu_text_tranform == 'Capitalize'){
$hair_spa_salon_tp_theme_css .='.main-navigation a {';
	$hair_spa_salon_tp_theme_css .='text-transform: capitalize;';
$hair_spa_salon_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$hair_spa_salon_slider_content_layout = get_theme_mod('hair_spa_salon_slider_content_layout', 'LEFT-ALIGN'); 
$hair_spa_salon_tp_theme_css .= '#slider .carousel-caption{';
switch ($hair_spa_salon_slider_content_layout) {
    case 'LEFT-ALIGN':
        $hair_spa_salon_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $hair_spa_salon_tp_theme_css .= 'text-align:center; left: 20%; right: 20%';
        break;
    case 'RIGHT-ALIGN':
        $hair_spa_salon_tp_theme_css .= 'text-align:right; left: 35%; right: 15%';
        break;
    default:
        $hair_spa_salon_tp_theme_css .= 'text-align:left; right: 35%; left: 15%';
        break;
}
$hair_spa_salon_tp_theme_css .= '}';


//sale position
$hair_spa_salon_scroll_position = get_theme_mod( 'hair_spa_salon_sale_tag_position','right');
if($hair_spa_salon_scroll_position == 'right'){
$hair_spa_salon_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $hair_spa_salon_tp_theme_css .='right: 25px !important;';
$hair_spa_salon_tp_theme_css .='}';
}else if($hair_spa_salon_scroll_position == 'left'){
$hair_spa_salon_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $hair_spa_salon_tp_theme_css .='left: 25px !important;';
$hair_spa_salon_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
	$hair_spa_salon_post_image_round = get_theme_mod('hair_spa_salon_post_image_round', 0);
	if($hair_spa_salon_post_image_round != false){
		$hair_spa_salon_tp_theme_css .='.blog .box-image img{';
			$hair_spa_salon_tp_theme_css .='border-radius: '.esc_attr($hair_spa_salon_post_image_round).'px;';
		$hair_spa_salon_tp_theme_css .='}';
	}

	$hair_spa_salon_post_image_width = get_theme_mod('hair_spa_salon_post_image_width', '');
	if($hair_spa_salon_post_image_width != false){
		$hair_spa_salon_tp_theme_css .='.blog .box-image img{';
			$hair_spa_salon_tp_theme_css .='Width: '.esc_attr($hair_spa_salon_post_image_width).'px;';
		$hair_spa_salon_tp_theme_css .='}';
	}

	$hair_spa_salon_post_image_length = get_theme_mod('hair_spa_salon_post_image_length', '');
	if($hair_spa_salon_post_image_length != false){
		$hair_spa_salon_tp_theme_css .='.blog .box-image img{';
			$hair_spa_salon_tp_theme_css .='height: '.esc_attr($hair_spa_salon_post_image_length).'px;';
		$hair_spa_salon_tp_theme_css .='}';
	}