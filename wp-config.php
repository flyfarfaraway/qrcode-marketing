<?php
define( 'WPCACHEHOME', 'C:\inetpub\vhosts\qrcode-marketing.vn\httpdocs\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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
define('DB_NAME', 'qrcode-marketing_com_db');

/** MySQL database username */
define('DB_USER', 'qrcod_db');

/** MySQL database password */
define('DB_PASSWORD', 'admin@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'wT^} r[V9&}wY_!~:0BJU*Q::@jul<|BZ3$5_H%m+Rgj~{ T`%^bN`SugW54 8GO');
define('SECURE_AUTH_KEY',  'qV&)EecsaJ7#FY<#Sn)hDs}v%i]~}b4o4pBUp;oZ27ESUs KbZ*T1WBi;0lNB9E*');
define('LOGGED_IN_KEY',    'F._bL}2Ib|wE*i`o4sc EgSvAznc]e2,NiK|H%sfx0c5G8b-%xh:`A#6]cntdAK+');
define('NONCE_KEY',        '2SxT/[WD4>#&eUM4N5qXl|{>@^y5W6hoCo-6Dd{=$D$n~pu?H3y|Fj3s;K1R(~q&');
define('AUTH_SALT',        'y@q`DnCg9B=mratH@@`c,#OS]V7oco-cI.NG,h%:o#[%I.e&`T+7{O<x6L5g!~&J');
define('SECURE_AUTH_SALT', 'xAwHvg6*J*{qS,)=sILlV{=7pBfoWhiDq{P?+sh_?`0u04P!=p+f|PB:b^%}GN1b');
define('LOGGED_IN_SALT',   'h?~9CT0OlX=0gS[]B3DR$uOLuB$@r=F4I{YU,~c-4]gXXY~.!|R^!d6}X!AP=Fo&');
define('NONCE_SALT',       '2nkIc_/)~W^]ii)+e0&Ak`$dHo.KK fn8U%>XJNj?s?>Eh|L/+Lm^GPhM:l!bOeh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qr_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define("OTGS_DISABLE_AUTO_UPDATES", true);
define("WPCACHEHOME", ABSPATH . '/wp-content/plugins/wp-super-cache/');
define('WP_CACHE', true); // Added by W3 Total Cache
define('COOKIE_DOMAIN', 'qrcode-marketing.com');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
