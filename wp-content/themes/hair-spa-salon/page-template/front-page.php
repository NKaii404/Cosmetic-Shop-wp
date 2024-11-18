<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'hair_spa_salon_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'hair_spa_salon_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/services' ); ?>
	<?php do_action( 'hair_spa_salon_after_services' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'hair_spa_salon_after_home_content' ); ?>
</main>

<?php get_footer();