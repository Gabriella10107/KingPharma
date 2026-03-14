<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u733509243_kQRRl' );

/** Database username */
define( 'DB_USER', 'u733509243_TnLRu' );

/** Database password */
define( 'DB_PASSWORD', 'Jo:5w4IQTMS' );

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
define( 'AUTH_KEY',          ',W%51M5x#AejMoP,L]2y >cCZV-iCI$>le1UP~>wv{Ib[Hp7[!$Je_?*AWO,)zCh' );
define( 'SECURE_AUTH_KEY',   'K-*d9lceFdwBL~e87s7]*nacW)12j>UbS MG(0iSA5:E1%d/P0@6JtV>G;Bn^Do-' );
define( 'LOGGED_IN_KEY',     '0G0Oj+DBnknrTQ/q<7t;q !>-UX`R?H>FmIK4~0gg;3+XU2#6w,d_-> ,0K2&6M0' );
define( 'NONCE_KEY',         't/Z/#W6s.C.)4_j392FKHm`W(@>bO8oNX:@+6Ls+rPa_9DiBdLtGRSi61WIxzRL.' );
define( 'AUTH_SALT',         'OJF n<?QPrhhX+(oyV]el*l>{<1I-P|O$-<&qof:[6+DI8~=4*P_Rma2rr_)lBoa' );
define( 'SECURE_AUTH_SALT',  '6G[+6*3w~Sxx<6.jI1x|O]/4MHD7o/<xy~m]uDAn+X7 :R@_VdV@tSIxpsSsyAVT' );
define( 'LOGGED_IN_SALT',    '5q;uGRT&l&t!8G(<EGN!evTQoT.wXSSg9E*&|+e35kqNr[_ZIgvy^b^~Z9:i_voN' );
define( 'NONCE_SALT',        '.F#l26^gj~R1Vk#o:7<BX1wZ`CTG28$X63s:GL#{6eqh>#iO!/aUm#Ci<^h+[?r<' );
define( 'WP_CACHE_KEY_SALT', 'suqYsT2p|gC[moIc$<K#(c/k7u]$p3MQ#0DS/k<Ok$|OF NN&DU[rMdi~yI,ep,o' );


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
define( 'COOKIEHASH', '4aa0a73808109b965f062ed5a16cabcf' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
