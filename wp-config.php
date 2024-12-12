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
define( 'DB_NAME', 'arcanumgit' );

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
define( 'AUTH_KEY',         'gYE.sVc<F.d[_u7]udx%^8<At^!]0qLkAy2Cg_4lgW`n.G^Zh0eYO}t|~#s*kI%}' );
define( 'SECURE_AUTH_KEY',  '7 .[YPpEe4b_}YG~-d_#j62FD79^{F={`4Uq^^jZZ?0..LF!,avt?xbL.r]Fu C?' );
define( 'LOGGED_IN_KEY',    'dQ!>}[FVxU;8r4bJc9<VS7U`Wk>G-eW-h||9 8LPKz}-M>qMLao.NM)-wAnMqjpj' );
define( 'NONCE_KEY',        '1C{L1AJ7Yzx2fMp7Zy{:,Wj)z%9E5dhPpIsM<(%iSd^0>D};D;!dqM&T?mM~[Vj1' );
define( 'AUTH_SALT',        'IVbwuq<8V@x ]U9jI<uo<9fsfs_yTz{n?6MQK,1lb9QHVFgws^K8/4aq,{4PhW1Q' );
define( 'SECURE_AUTH_SALT', 'NCu,c%&/6u]70FjCwDjYYcEfp+lS0FC^>>B_S~1RHXt1}ixO,4^QlO=OyRfNN~$+' );
define( 'LOGGED_IN_SALT',   'asYOL037f76u!e QkqW%a[%%f+4gZ x6QZnH+?A7jJnkkgVTNQNOSciSKl(#vZas' );
define( 'NONCE_SALT',       '(Qe_ybSAR [,[XBM7N(S>nL3lgu#cC}q/($LS8x3V4R_ezd^<2/bfHmV+<`wP/oB' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
