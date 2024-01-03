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
define( 'AUTH_KEY',          'Cpp=C!xb7v>5[/_Wan~}CgKNt.1&)gboPAt}b,9y`<RG1;fX6,W968 Ykoltyvvi' );
define( 'SECURE_AUTH_KEY',   'iqNv:58os QivLss!74`wGsKNOi#*m>MyrR9q<?hw;;fLJwOLhgayK{=4eZY&x?n' );
define( 'LOGGED_IN_KEY',     '4az-j{Z7)rf%0[TjkG7]w4Y ai6`WA:D.N~ovhL=/ oi?Qr+_!<4&&xUMW(u+-1b' );
define( 'NONCE_KEY',         'EAV|@(]&;Ap5!rnu?<xU!=K&vBX5??rXBe*-q~x8soZ,y@Qf|qpSuw;<Ms=ak*L>' );
define( 'AUTH_SALT',         'Pw0[AD`=A2)V~iLic{HWLK&:>;x0_tMa)`XWM`u<!)RrvG66/n,oE>1(A<_4#BM}' );
define( 'SECURE_AUTH_SALT',  '8SdX_b+7W*>^X&7+Ga3q_ssARoEt2+x0}Oq#(tYw+8.uYkq &Q1Wwuf:4K3WUn(A' );
define( 'LOGGED_IN_SALT',    ')Va(Mw>AU?io|f%.<.{^Su^X7NWxPgewTDIcYD[I(*h.+Vv8Snv:%N5+-Pc;4x,s' );
define( 'NONCE_SALT',        '-X_]^AjZ/nJvPX MEkZ&Deg:#w`N1PpDX69^8`O#GQ;S5%(%1D^L)A(m.%S~lN>5' );
define( 'WP_CACHE_KEY_SALT', 'uX;Wx@^O{P2;,& Wm@ph2t+*DoYh`MZKL@js&!kWg%MsB?u~v{`|hVTeA}?zetR}' );


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
// Turns WordPress debugging on
define('WP_DEBUG', true);

// Tells WordPress to log everything to /wp-content/debug.log
define('WP_DEBUG_LOG', true);

// Doesn’t force the PHP ‘display_errors’ variable to be on
define('WP_DEBUG_DISPLAY', false);

// Hides errors from being displayed on-screen
@ini_set('display_errors', 0);


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
