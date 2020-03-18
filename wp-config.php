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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7e!;ZuyW#y/j_qMNW(lN#;j5S _QSQghiUhLBIF7A3>SlTn|!FdAvL-`.zC[Q.{>' );
define( 'SECURE_AUTH_KEY',  ' *AK*]0ivU-5RIt16okp$XeuAd@NReMQxOQ?2Lc.qJfkXVGTY:rR`$%2=Oz:O37[' );
define( 'LOGGED_IN_KEY',    'MH7n>yMjIZ9*nzTS+(PdQ%gKubRz&jot%?BoGKTJ|i#+c><]VRU[w$$!LL=:G(wb' );
define( 'NONCE_KEY',        'FwU[w$yAKK5Bx]+_39!2MXRcGkWM~~P=6D}2s:K-%fTD; =2k^cIVxX8(4kkPL6L' );
define( 'AUTH_SALT',        'sjeBrxDo1R<uj4h}z4!3D6}sCIhUn#0,HUU3[p:m& )p{f0>Qp [ChZ.Bb1ph0j:' );
define( 'SECURE_AUTH_SALT', '0cFj:e-AYr,[f`$?]T=1R!Buq>&9sq?]P>czQ=lt6CKh zsAk*c{p0nm+K|X8xLF' );
define( 'LOGGED_IN_SALT',   'n1*hmY=9/J}XW.Q`3+8J3Iok2w87Z8`d=c6[*&k5xBKq,wsc~L$qyWma~SfqjLM|' );
define( 'NONCE_SALT',       'xm/Q$}CcJ-8TFd&sRG,!z=YV&I@faF)G:G5OkLml+z_U|Cpkum$oq[{$ i~qm<b/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');

