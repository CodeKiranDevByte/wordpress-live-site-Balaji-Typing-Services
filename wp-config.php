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
define( 'DB_NAME', 'u755965925_OPnsN' );

/** Database username */
define( 'DB_USER', 'u755965925_Ed5I3' );

/** Database password */
define( 'DB_PASSWORD', 'miW8nbIqnw' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '_1w#0)~O]ASbuAjEE6x$3Cer^s)b|l51G7%=`=JnZ ) sS]8:AdQ_v}RY:Xm }Yl' );
define( 'SECURE_AUTH_KEY',   '|w[+|l%;mX>MAb.NQ-O:/Y;5,53oZdtGFHfeepr$c(^F=sMe<YIF-*!p1+[>K8:x' );
define( 'LOGGED_IN_KEY',     '=lk*R=,,-x^V&T|!)Z78Sh/yAOQp=^[M??V.*uDLDX)JPR&+uJb?gSig;YiJ8R-i' );
define( 'NONCE_KEY',         'KPsWp(U<b%&no$]B&lO1^yj]7i)~G)P&1f++Ix+iLVkGrI#-dGojx;lw<S<Jalwv' );
define( 'AUTH_SALT',         '3Jr{qUP0LGa@muTIa>UzbPM+F%U^~X%}hykqN!*Is+?ks]EpIqXPR6!o~vQ%fquC' );
define( 'SECURE_AUTH_SALT',  'u_rzLj7YcO%EO8cDluc@RfIT5x0@l@mR6~bGzYqFx;{8PoC_*,U?hH$~)?2Sk+m7' );
define( 'LOGGED_IN_SALT',    'KJ2Ifs75PY`7oO9i)khO,27+3PFlk.o:pS{rVQn2Hsh)E!,o#QtMv^!rCtsb7~iu' );
define( 'NONCE_SALT',        'RsK@y~SEFUM1Rom/3jE[S6ikJCIA2w?{aXOg_b<7.e)mV]lwMpBmK*eH-Ua=$/&2' );
define( 'WP_CACHE_KEY_SALT', 'Zn?43P2CP,{Ad9s,?35Xx2k25[G}2o-E`=B;=|tJ|QnU)Sc?dk K0a1m3o}&W>v@' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
