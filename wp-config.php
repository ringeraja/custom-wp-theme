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
define( 'DB_NAME', 'custom_wp_theme23' );

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
define( 'AUTH_KEY',         'oKSa659g5>:AoU3d-7~3vVlY7/k+i7JGjq{tPN%nnq3&F% )zG`y!=GM9!B/IU0n' );
define( 'SECURE_AUTH_KEY',  '1 j}3|OcU!12U>U*U~F5`p7X- AwX1siJHUxycQ/t3i-I7P?JcUs@Z?8;d8|oH]s' );
define( 'LOGGED_IN_KEY',    'M#J9[fibSUWRQ-@<[a#5v-:9Sc;xWBVVB:<mX#M!!Ip3nkM]1OZk#I1|cx2rkm2%' );
define( 'NONCE_KEY',        'Bnm,[]g.m>8l1`G-QPE|kN16A3$e5Gz)=DIrACv`x(<]Sh)Y1A`9dfDrpY:DTJyG' );
define( 'AUTH_SALT',        '3B?Wq1mc7btxd9KI9a9Kyo=t^u{#tDU-LS_s%40[%uib>4h[q[:5%~K>x+:LdL%2' );
define( 'SECURE_AUTH_SALT', '#$*{3l*@7^Lj C:c4EhK,3Cez80h]v-)@zEL0`Ufl[=} ,kJA5p&o%/sHHa~G(^h' );
define( 'LOGGED_IN_SALT',   '0c&Le.Z OC?JIvGKU8eRzm?R^<asRwST2P(NDPatZ9x~pzyM,n-(/@oTfl`jc.F@' );
define( 'NONCE_SALT',       'z=YVe2Z=Bj5`F ~^QqRhH$KBGB6,?(l2a7&L_.*60,cWVau[XS(!3)fl2lfAS.o^' );

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
/** Debuging purposes */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
error_reporting(E_ALL);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
