<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FictionalUniversityDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#{1cUzhL.ykii~k_tCm,fEb+_KoB>XV|]-N/1W0Og19x2!e+W8LlH93noDf@U@1H' );
define( 'SECURE_AUTH_KEY',  'r&|TC[UC$!@uVnYo5#C^$?$jH9fbR*[2b!b9kOJbipDMJhlJ{nI_0%e{U7{C 7z6' );
define( 'LOGGED_IN_KEY',    'H<$k1boO7jAzOxj` WZAYrp$W-HphY(<98,D{2gUjUQ4,e0qoOZbIi|<[T`VnnE(' );
define( 'NONCE_KEY',        'B#Z*Kpf G1W,^QokSiqB(83jW8Rgmn8$<`HYc#gKLal1U<JB2ZZk6Y9Jqy*xBh)p' );
define( 'AUTH_SALT',        'Xfe4t:M4pz!1x>]qe,>WZ#BlrT!GcQwu[kZu-kGyU38/j L/FI@sV,2<P4_cJJ9I' );
define( 'SECURE_AUTH_SALT', 'Ob>)6}{oTTR+uNt@&{-06U_Z<_,kORK9btL^;sMU4U4$CT8@fOkL`v*OcqCOenU~' );
define( 'LOGGED_IN_SALT',   'ALvV:iR(TMsOENnwPWy^k5gw(/*3I/ZzfOJ_,(5{x;[{vn}JyfilUzN $065z~qQ' );
define( 'NONCE_SALT',       'it~ZKWp*_]n99qa~V>Ahl  a2*f#5m-:D=.o%tWo:Hc:mGTi}WV%Q)O]Q)K8F)n}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
