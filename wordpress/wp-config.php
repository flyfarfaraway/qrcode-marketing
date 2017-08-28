<?php
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qrcode-marketing_com_wordpress_b' );

/** MySQL database username */
define( 'DB_USER', 'qrcod_wordpres_q' );

/** MySQL database password */
define('DB_PASSWORD', 'Zz$80iFmM1');

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'xLxB24lIp%gC_@:5eEBVED8a7F7zJL*elCK!&i2!D&My5(@FZ5c/pb%lTw|jdTz1');
define('SECURE_AUTH_KEY', '!YR39*91HtF@6b2w2/kH:aAh/qWs%fk3o~n&-x|@Ho3YQX692@Kn4:T30];*LO[*');
define('LOGGED_IN_KEY', '|;d+7gHh4:1uB;u1twS47;0x~V72jk&w:H47GBZ64Aiy*@Z6JcDMbZ+u82#a9GI%');
define('NONCE_KEY', 'JS;QhW4(KRJ;~33-J24g7~;[k5Pdq::jQ9(8U7y2pg5jI*!x[5R46)[t2q35/3s@');
define('AUTH_SALT', 'lY4t62S251M889O5(4O71EpQ5w:6E1P2H141:3mC:~3v%L|Gy_)o!hc5C~HYMqSp');
define('SECURE_AUTH_SALT', '~TA5vc@U-hBeEgR~#]/#GuI1yjVOQ8[B/xd+i4uo1Sga5c3bR6ZL#kjwc;02Ro35');
define('LOGGED_IN_SALT', 'pso/i7jM#P%0-MqmLCeO14T]0fRc@DV!glR[sK)5|_psY(V7H3p40842iSFE)xaZ');
define('NONCE_SALT', ']R0#!*91CSM932i7F5An367SerF*72+K_Q]8rt6sz11ZkBB6zAgLj4#2!j61qt8-');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'H9FFo_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
