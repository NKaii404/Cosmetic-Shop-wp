<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function hair_spa_salon_categorized_blog() {
	$hair_spa_salon_category_count = get_transient( 'hair_spa_salon_categories' );

	if ( false === $hair_spa_salon_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$hair_spa_salon_categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$hair_spa_salon_category_count = count( $hair_spa_salon_categories );

		set_transient( 'hair_spa_salon_categories', $hair_spa_salon_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $hair_spa_salon_category_count > 1;
}

if ( ! function_exists( 'hair_spa_salon_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Hair Spa Salon
 */
function hair_spa_salon_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in hair_spa_salon_categorized_blog.
 */
function hair_spa_salon_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'hair_spa_salon_categories' );
}
add_action( 'edit_category', 'hair_spa_salon_category_transient_flusher' );
add_action( 'save_post',     'hair_spa_salon_category_transient_flusher' );