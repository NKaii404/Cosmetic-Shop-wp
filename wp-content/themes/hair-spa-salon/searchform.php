<?php
/**
 * Template for displaying search forms in Hair Spa Salon
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

?>

<?php $hair_spa_salon_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo esc_attr( $hair_spa_salon_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'hair-spa-salon' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'hair-spa-salon' ); ?></button>
</form>