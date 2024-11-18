<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package Hair Spa Salon
 * @subpackage hair_spa_salon
 */

?>
<div id="category-post">
	<section class="no-results not-found">
		<header class="page-header">
			<h1 class="page-title"><?php echo esc_html(get_theme_mod('hair_spa_salon_edit_no_result_title',__('Nothing Found','hair-spa-salon')));?></h1>
		</header>
		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p>
					<?php
					/* translators: %s: Post editor URL. */
					printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'hair-spa-salon' ), esc_url( admin_url( 'post-new.php' ) ) );
					?>
				</p>

			<?php else : ?>


				<p><?php echo esc_html(get_theme_mod('hair_spa_salon_edit_no_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','hair-spa-salon')));?></p>
				<?php
					get_search_form();

			endif; ?>
		</div>
	</section>
</div>
