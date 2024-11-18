<?php
define('WP_CACHE', true); // WP-Optimize Cache
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'aNkI5PZkjrJWwYCzpSsU2y3DCsOAJMfG0pcmWKAquUzXBhPlv3LZfhTV6VFWrtc4');
//END Really Simple Security key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wordpress' );
/** Database password */
define( 'DB_PASSWORD', 'Daq2GVCb' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']>I[$kl}U-,#_RS2#2!9.tk,A@O:}D8@EgV!gLnV~1FiiY;+K}rB,>!exW&LFhP2' );
define( 'SECURE_AUTH_KEY',   ']eOu1)n`W:hOcmW1{m^9=?i0?CIJ9dKw-z1+by]J_qGX}acdKJ|2xG u1:gQ=0[e' );
define( 'LOGGED_IN_KEY',     '}H:l}49/6$@-]E9rBlJ*R+7NzMJfn`JV:t?xN%CWjkqk/^AxyQMy76OI9qeLd8wN' );
define( 'NONCE_KEY',         ')<,m$;b)u/%VM*wUT=K0JseQE{t6aW/?:GQzA}5+T UF-|4LE3ad+OM70Hh9R*G}' );
define( 'AUTH_SALT',         '0YqW]ur)bZfve_m-Ny|t6Bx4b$<)B8^A95_97lvF;d`+yq@Q?{p*&wkxNmI)x=g3' );
define( 'SECURE_AUTH_SALT',  'c{4(}kutGh(^e1B/;VtGm[S`2zGe2>48~IF.%colh.&`r?UKIa[Q#^yuzb+(y1sk' );
define( 'LOGGED_IN_SALT',    'ckvG#C/Q<6!xuJg2u6R.Jo{A9k6ucIbdd8ZaSaySd9aj9MH#(7XP6bd~ED&IGP{P' );
define( 'NONCE_SALT',        'Wl>k.>$_z^DZ4Ij^9ZmP;ZA|uO3!uVFB:Shkxg[NaWxG(<h2/=&b{~N`HlXy,9eS' );
define( 'WP_CACHE_KEY_SALT', 'C #4tYcG^)oGlFSbS`8yN^Q6!wJqG<f3{ 8w/5LG9a12^)}qsMH0b,+5qcYH_.:j' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';