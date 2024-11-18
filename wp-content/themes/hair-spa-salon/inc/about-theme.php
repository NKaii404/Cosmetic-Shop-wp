<?php
/**
 * Hair Spa Salon Theme Page
 *
 * @package Hair Spa Salon
 */

function hair_spa_salon_admin_scripts() {
	wp_dequeue_script('hair-spa-salon-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'hair_spa_salon_admin_scripts' );

if ( ! defined( 'HAIR_SPA_SALON_FREE_THEME_URL' ) ) {
	define( 'HAIR_SPA_SALON_FREE_THEME_URL', 'https://www.themespride.com/products/free-hair-salon-wordpress-theme' );
}
if ( ! defined( 'HAIR_SPA_SALON_PRO_THEME_URL' ) ) {
	define( 'HAIR_SPA_SALON_PRO_THEME_URL', 'https://www.themespride.com/products/hair-spa-wordpress-theme' );
}
if ( ! defined( 'HAIR_SPA_SALON_DEMO_THEME_URL' ) ) {
	define( 'HAIR_SPA_SALON_DEMO_THEME_URL', 'https://page.themespride.com/hair-spa-salon/' );
}
if ( ! defined( 'HAIR_SPA_SALON_DOCS_THEME_URL' ) ) {
    define( 'HAIR_SPA_SALON_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/hair-spa-salon/' );
}
if ( ! defined( 'HAIR_SPA_SALON_RATE_THEME_URL' ) ) {
    define( 'HAIR_SPA_SALON_RATE_THEME_URL', 'https://wordpress.org/support/theme/hair-spa-salon/reviews/#new-post' );
}
if ( ! defined( 'HAIR_SPA_SALON_CHANGELOG_THEME_URL' ) ) {
    define( 'HAIR_SPA_SALON_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'HAIR_SPA_SALON_SUPPORT_THEME_URL' ) ) {
    define( 'HAIR_SPA_SALON_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/hair-spa-salon/' );
}
if ( ! defined( 'HAIR_SPA_SALON_THEME_BUNDLE' ) ) {
    define( 'HAIR_SPA_SALON_THEME_BUNDLE', 'https://www.themespride.com/products/wordpress-theme-bundle' );
}
/**
 * Add theme page
 */
function hair_spa_salon_menu() {
	add_theme_page( esc_html__( 'About Theme', 'hair-spa-salon' ), esc_html__( 'About Theme', 'hair-spa-salon' ), 'edit_theme_options', 'hair-spa-salon-about', 'hair_spa_salon_about_display' );
}
add_action( 'admin_menu', 'hair_spa_salon_menu' );

/**
 * Display About page
 */
function hair_spa_salon_about_display() {
	$hair_spa_salon_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $hair_spa_salon_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$hair_spa_salon_description = explode( '. ', $hair_spa_salon_theme->get( 'Description' ) );

					array_pop( $hair_spa_salon_description );

					$hair_spa_salon_description = implode( '. ', $hair_spa_salon_description );

					echo esc_html( $hair_spa_salon_description . '.' );
				?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'hair-spa-salon' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'hair-spa-salon' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'hair-spa-salon' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'hair-spa-salon' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'hair-spa-salon' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $hair_spa_salon_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'hair-spa-salon' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'hair-spa-salon-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'hair-spa-salon-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'hair-spa-salon' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'hair-spa-salon-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'hair-spa-salon' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'hair-spa-salon-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'hair-spa-salon' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'hair-spa-salon-about', 'tab' => 'get_bundle' ), 'themes.php' ) ) ); ?>" class="blink wp-bundle nav-tab<?php echo ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Get WordPress Theme Bundle', 'hair-spa-salon' ); ?></a>
		</nav>

		<?php
			hair_spa_salon_main_screen();

			hair_spa_salon_changelog_screen();

			hair_spa_salon_free_vs_pro();

			hair_spa_salon_get_bundle();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'hair-spa-salon' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'hair-spa-salon' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'hair-spa-salon' ) : esc_html_e( 'Go to Dashboard', 'hair-spa-salon' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function hair_spa_salon_main_screen() {
	if ( isset( $_GET['page'] ) && 'hair-spa-salon-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'hair-spa-salon' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'hair-spa-salon' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'hair-spa-salon' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'hair-spa-salon' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'hair-spa-salon' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'hair-spa-salon' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'hair-spa-salon' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'hair-spa-salon' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'hair-spa-salon' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function hair_spa_salon_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'hair-spa-salon' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'hair_spa_salon_changelog_file', HAIR_SPA_SALON_CHANGELOG_THEME_URL );
				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = hair_spa_salon_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function hair_spa_salon_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function hair_spa_salon_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'hair-spa-salon' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'hair-spa-salon' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'hair-spa-salon' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'hair-spa-salon' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'hair-spa-salon' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a  href="<?php echo esc_url( HAIR_SPA_SALON_PRO_THEME_URL ); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'hair-spa-salon' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}
function hair_spa_salon_get_bundle() {
	if ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'Get WordPress Theme Bundle', 'hair-spa-salon' ); ?></p>
			<div class="col card">
				<h2 class="title"><?php esc_html_e( ' WordPress Theme Bundle of 65+ Themes At 15% Discount. ', 'hair-spa-salon' ); ?></h2>
				<p><?php esc_html_e( 'Spring Offer Is To Get WP Bundle of 65+ Themes At 15% Discount use the coupon', 'hair-spa-salon' ) ?>"<input type="text" value=" TPRIDE15 "  id="myInput">".</p>
				<p><a target="_blank" href="<?php echo esc_url( HAIR_SPA_SALON_THEME_BUNDLE ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Bundle', 'hair-spa-salon' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}