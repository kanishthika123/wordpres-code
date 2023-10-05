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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'database-1.ckmlnxnd62rz.eu-west-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'O{ ,Wl4c%FLZDP3xI875S=U>?|_5b6SH6EeT/[k[=)5hSwx_&|-@,*F@C+l13R4W' );
define( 'SECURE_AUTH_KEY',  'g>0Zfp mp4FV:6-8x5|B5z%N{L]KY*-pJNPUwo5h+QD$^,GBdjt},AchvI6N+mXG' );
define( 'LOGGED_IN_KEY',    '2qi6,w?+akxjb0JQl>Z)pP;+wj7aG&g,xC5z17T0H%hr1d+`7 xMmud;MqW:yxP9' );
define( 'NONCE_KEY',        'qV3l^(i;!fWtqK3rq4H2k=g7(O)/VFoG4O9)]jc+QPUu%%c)]Svu$$*d<40LL;WT' );
define( 'AUTH_SALT',        'c2m.%]C7>9ni<rv{H_ $<;r:vNO&/T<vAWgKj_PrIY^SMi1hPp/bN5vRV?OhoIJv' );
define( 'SECURE_AUTH_SALT', 'IU|0B;`,1V+@;qFPXam%C!KM8BZlRrH^%9O)gWIh5u;Bv}XarU{][ib%|$%pqa.]' );
define( 'LOGGED_IN_SALT',   'Zxw]0n7+C~$U*tjy0YPW-8rRgK|/:<2/bGN}Ft<M8NQAve_Ok#^>laQ<Q-90XAw<' );
define( 'NONCE_SALT',       'p2pg0mhL=WxV^Dqd3T:Q{%)^-DP9>~noyCG)fBdIX~$8jJx4ttRooFOUPIct:.*t' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

