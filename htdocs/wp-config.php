<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */



// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {

  // Live Server Database Settings

	define('DB_NAME', 'okeon');
	/** MySQL database username */
	define('DB_USER', 'root');
	/** MySQL database password */
	define('DB_PASSWORD', 'root');
	/** MySQL hostname */
	define('DB_HOST', 'localhost');

  
  // Overwrites the database to save keep edeting the DB
  define('WP_HOME','http://okeon.unit.oist.jp/');
  define('WP_SITEURL','http://okeon.unit.oist.jp/');
  
  // Turn Debug off on live server
  define('WP_DEBUG', false);
}



  // ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L#)?d*uEZ_pPUma@;8nRs4m[/V{/>j@Bm;  +x`Zb]KPu$S5+}w84*-&Eb0z`k$V');

define('SECURE_AUTH_KEY',  '`CO+IWK7L8SspRh[|MP}t?]`x`$;s-%gt|{IG,9*5-zRnr(/:0S|3:IM93-UsLp1');

define('LOGGED_IN_KEY',    'Y6Q|MQK[@BsO{$!x@R%|pJ7*R|KP]GdaA-w1p^:=,FAI7ifD`4>XhN9u-<g9^-dt');

define('NONCE_KEY',        'i*ueVo*svr` lcq|@fP>kW}Q~V`,j~ptF*gorDDlIq98|WX7+(&8}kq+%x[M3a8[');

define('AUTH_SALT',        'dzH1iGHRj^9^5)7h2>q(PQ(zBKf/|/kZ||Btj:j#m5p6DR,]CU#w|3;m$*e;H.i=');

define('SECURE_AUTH_SALT', 'dGI/S=)zby-M*oUSzXsv#u0uFLdH$95eW|`fwWtrgK/9xu-oTHzj_p||*I9/Ya1_');

define('LOGGED_IN_SALT',   'k=|1Eox5-OBGv;[MZ>w?o.TI5O-9()$kG+wEXL`_+MH3 SwKcpaT-bcUv(zOLvZ`');

define('NONCE_SALT',       'r`>i-Plo{.]]6pIaDT+#-q!H.G. +tw%/A~,%pCd=|fMvo+T4AEnZG}7buAOwhoV');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'okeon_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
