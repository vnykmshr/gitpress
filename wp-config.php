<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

define('WP_DEFAULT_THEME', 'twentytwelve');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gitpressdb');

/** MySQL database username */
define('DB_USER', 'gitpress');

/** MySQL database password */
define('DB_PASSWORD', 'gitpress');

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
define('AUTH_KEY',         '_8rn:UW<s+(Sf:pgA3|0Vm&*nDHp*deaiSE{BT./A[4=}w8Sk-+a!;VAc:S6C@+/');
define('SECURE_AUTH_KEY',  '0[IBthD2Y^9+> L-(&!)O2-9XKH[I.#e#9sny>+(4k~w<I#,x{e+tD5SQ9<.#&1|');
define('LOGGED_IN_KEY',    'U|7-tnm$U;f-qx|[N}UGv,rkOj9YQ-4r 2WTR{f+V.h5{L+raVLW($|/9$EVE4a*');
define('NONCE_KEY',        '480)V+f)u=Gq4aK+)vQtheoXBQ*HwwB$Dj-RoBT9-vQ-|^6&lfnEW&~8suK][)Y{');
define('AUTH_SALT',        'e|xa.C3)(y`tyv.h[=x>aG|F&:FIiuvXse4UgnBQ)4nt_V)Nb5~PHuMvy<8zdJ|8');
define('SECURE_AUTH_SALT', 'fh>wi+XN+|3 ,{ _QKIAS[v(z9|Q9O+5aNyLlqApj@k<5{BsEuo/wtX1IPJSf1]F');
define('LOGGED_IN_SALT',   'HP]$R8_-!dm8WD0[VHQ4Zu+<2V~&mFbXmBw;Rp=Bf[uAOp*Op/@|*}9s-SH`,V=!');
define('NONCE_SALT',       'd-,3n8esaN0wHZdNkpqN,(kz^.#n+f:q_0o|6]OQBds}2Kh$jis)i}Nf?OAFrV} ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gitpress_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
