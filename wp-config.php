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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '0@d_4wvpZe$/i{@d__Uqxp`Z0v|?~YeSkIj{z_3:W_g24Ol8p[f2%0)uB|-vQGG%');
define('SECURE_AUTH_KEY',  '~X~ K?:xsYC9`R[Zv0wIzJF| o}_2>,$Xpb200!E^5nCjGCouSP_X1wVl]}rOnpf');
define('LOGGED_IN_KEY',    '5S/Ik&:VCN}$w/Yz,}M-<qbP8ZMN(d8q8M<KSeI&Uo,]1>reQkG[.$FWH$75xB&F');
define('NONCE_KEY',        '=4mRQcWz,h&>!:VUW2&)540,s5,V-bs@Ef1`OIvz$DLgvN.@O[=4)ygQ5)G*Qler');
define('AUTH_SALT',        'd=84~x5gMWodrw`oD*C-c`N0w/YMzeH`<bR|?w[sr5XV@ pGq`b/csGu35O6t|%f');
define('SECURE_AUTH_SALT', 'iluBHG/Q[YZ:8bKYn5An.g_Yro){>,nfstwW-jy~O;|;na!@;[ 7w;YZX=Z/K!s0');
define('LOGGED_IN_SALT',   'CIwb89c6dX{^W[<rU@|25{{9- r wRB}}=>vsFi.#f;okU)IdrKRt)l^W8uEJm;R');
define('NONCE_SALT',       'FP h8N4_Jco8+El<n E:9Pi`#=P#[;&^B98RTC{B@H8PFt7+*pSDQe5t)~%SDM!i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
