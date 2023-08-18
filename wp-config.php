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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ft>nj]qh^Cu<CtgYs}l6k,u/P]+:LJosFt=XG*L#MPe/NxiREE<U5353`pf40*]>' );
define( 'SECURE_AUTH_KEY',  'D^0~v DzNK;[Q:m;fSi1Tw4Z{>`w(w]yM?04/;+$^d09~*{Upp[P2Q6b|lFz@q!M' );
define( 'LOGGED_IN_KEY',    'g3jK}=]n~baQl!A3woVwt)ae:u2maM5M|ze]KUm?bZd3&:}1F/A1j.p8-h:O:d<o' );
define( 'NONCE_KEY',        '<C2WLg+&K%xXki&lKhQ4zCpaPw<$K(Prm6~3ZT1otgD&M4B=EwO}1@ n9[[sdO{ ' );
define( 'AUTH_SALT',        'Du!*gg(Q!U;DZH|~Mo/Vc=Y56p4hlIg,( q&z4.*)KJHI5{dO**4M|0u>P56Z.u<' );
define( 'SECURE_AUTH_SALT', '()tX||Y3XF2-D1Bd#+y@+3V;_sG{4ih7<b;1oCju_>;u&D*{c,XQ6@@taH.6KS-E' );
define( 'LOGGED_IN_SALT',   'r2*n,3aUS|d=$[R%#s9G%9*d*C%D#@_bjk:b34=B]CE~GnH%(L^E5,^?45prt/.?' );
define( 'NONCE_SALT',       '174j`(zMPFYf,9cKs,#Bt!$<gu*l8]S%=ZmXU7XXm <@h?Yc@,@z5U+4 5=.zp`z' );

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
