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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** custome code 

define('FS_METHOD', 'direct');

// ** end of custom code

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'educati' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')L2lO9fmVt@BMsZ_>YH}A^1!)U`SmA>}Kbr3uoLw-h[_G@#&$L@s}f&  A;P$#&*' );
define( 'SECURE_AUTH_KEY',  'K#>IP/7b-Oz+FP=[)! %H83^iFATt>O_vtvGrF788,*r0%PB]obaA?AhDT49y&yf' );
define( 'LOGGED_IN_KEY',    '/QnaWA-N5K6YZm+5JxucK</+K(9yK^`zLjj_ut,FF P->BZG~WjMmVpq;?hSak.X' );
define( 'NONCE_KEY',        'yGJL&BEM&=]g!SMT?iuc]>(v~/cqqBCUxEaNlT0f(4.}@&pgY{!1R&!tuMm)8*Ld' );
define( 'AUTH_SALT',        'Es6>5K0E#8teT~TCD{O# Z`$4PI~b:xY 7r~#/GyGN<HJ)(BXlrP&P;E:0Zv^wF/' );
define( 'SECURE_AUTH_SALT', 'jw6j~/PY5F+C:PRg7p;G/+dOgFDvdll-&`+Y4Wqgx/#B9P[0F /ucTV?m#Pd[a-A' );
define( 'LOGGED_IN_SALT',   'fd:nC.!P5 m ^LLa&}vro1&rZUd)r4pz`.pi/@Tluy;(%N{$>eB@-LZSX;arauSx' );
define( 'NONCE_SALT',       't%N$Bx<jVYtJKcV_=r/&bo.ApLz/H=f28+-<ap*5eVFuRT8*jMm<HwKd@]1D;>CG' );

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
