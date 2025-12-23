<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_blog' );

/** Database username */
define( 'DB_USER', 'db_blog' );

/** Database password */
define( 'DB_PASSWORD', '1uJyWGw@yPfHXey]' );

/** Database hostname */
define( 'DB_HOST', 'suzuki-prod.c5ce0c1lxzkf.ap-south-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '-mL&R6w!j>%Du@QP.oj[g_?SUREzY-$(GP#:wQp%w6IdH@K[U3Y%gJC2Q(r+|9t|');
define('SECURE_AUTH_KEY',  'Vx ? A-+)APn!?*8*$hSc4@6+3vp4HRns++zpu2%TQ;jK(|W#i5$+t4*n)|zBh5<');
define('LOGGED_IN_KEY',    '(Ylu~t0{l37Nw&1hkM QE6@(%i-jMJ#wL=ou47Wv0{bEk;h4[new/VN{@&FD<[9h');
define('NONCE_KEY',        '-V-Atq6?8S4dyIcB44Wb4|=Dc!&z#jWHuJv3}vHOm^MG_|Bu|is^h1_wS2?Vx5SD');
define('AUTH_SALT',        '[M,dTs2<W/&JMo!dex2|+Y]L@Rjm+Lq1)3z0#q5m_F^0; .a%{HbvgP|-f|RMv5x');
define('SECURE_AUTH_SALT', '{A,oY[/7CvQ}c2e=eQT}x-<CIBQ/T%slZ#2U&m0!~Xnar7$8X7K }aaNv +_ZI{}');
define('LOGGED_IN_SALT',   'G;%]i>@9-87g26u7#(|yC,YI5F4E/TO9fA^shTq]M96cn ]-79kv;&C9Q|A6g+(3');
define('NONCE_SALT',       'RAub &q<hO+{N)];?p`u;`gwsS+~WmoG3P)[V8(M~2kIu0@51H.Gu<e}Z0$g:ROK');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'sb_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

define( 'SUZUKI_SITE_URL', 'https://www.suzukimotorcycle.co.in' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
