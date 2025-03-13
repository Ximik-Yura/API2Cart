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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'ZH~:&QUQ/%;=*w5z]4Z{V#4,`_1v3[#)pp <WjyxN2{[R<`o+8Q%5FHrr/w5|99u' );
define( 'SECURE_AUTH_KEY',   '$FDUVzdO|r`<q+z &QJ@|kRS).<vG=2bs*|xI&b#bA)g@|V5@`4RSw+/NIU3![Im' );
define( 'LOGGED_IN_KEY',     '+yn3;!&k^>#<^&[Q*!Qb9}=SIs`xeSD@@40zCCf]P9KKaO8[vGphG+`kH)uJ)a0<' );
define( 'NONCE_KEY',         'iGEU9@%>/lK_OQOSz=Z /(vT.DI|4$,KoRq8-6XD)rc?2/ fM?oH*#NwE.sg+n*L' );
define( 'AUTH_SALT',         '&h y^5_5HDQA>X*[WN`gowE`;&wKL]j-?hR?SQ;]?V|&x?7H+gN93vpZU6RFIYMI' );
define( 'SECURE_AUTH_SALT',  'V Ku+N(Ce$fU)a8!8kY@ih@ o&)qL5BPuJG1uZB<sF86L$kL*Z%.dnJ{5e)jwS|k' );
define( 'LOGGED_IN_SALT',    '1cm:/(7iSh8*4,:WA_=y ^kIkg<BYAEj4IH/M]v.`i,Jd| nhRL{.Pg=>t}kODpS' );
define( 'NONCE_SALT',        'd$MYI!Lyb9Wm_?Ppf#W4D8IYy[ndn}xp75odsfc(i2SKOk%D.__vv?Z~gWl:6|_Y' );
define( 'WP_CACHE_KEY_SALT', 'sldfJO&BF$`Ff+_y(%iYpq]AmNLiV/=-+_AFxpUq7XsI>?_F[zUJ[z[(h$h<ydt+' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
