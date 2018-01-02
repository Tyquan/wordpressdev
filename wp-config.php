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
define('DB_NAME', 'wordpressdev');

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
define('AUTH_KEY',         'vR;W5eAs?V+R|4)c?YMJPnvhU7)jb:2p/z7&|#6(M)5d<E7ow.84^<mX#`2vb&0b');
define('SECURE_AUTH_KEY',  'hGeQ3 w7!LxZSSO->n<$Ts%YnPumX-<!CZL/*+wM9(Y{@u#:)g@4vRyvZ&P1zyeQ');
define('LOGGED_IN_KEY',    'XLAQa+Hb17[kGdyf=!X$*(e,=;2M8|VXwqMtH}9b<VqP}VRxprp5]^~c&vGihk/E');
define('NONCE_KEY',        '1ZwEufxhnZY,y!N*O20@.]7-.YU:O0-%Jcr=Bj:?8TPV5oAOmKxEU*;=Y&kE3=hP');
define('AUTH_SALT',        '(naDX8X S_N#a[6M=UnVXlt7hS|0Bmyv8:tp[P&m=tx(g0dIyQy {qu/;!`^;~>w');
define('SECURE_AUTH_SALT', '(j%0_1JWs2]!5pA.{d75J:`[v:bdu<4JdjYP`~UKJ;e5h;gC9F-bO7*} pK;USzA');
define('LOGGED_IN_SALT',   'O8ImKihlS*bvkAqu.gE96CWl<Z`2(sqkZEd^M2z+mcq,Ghu~maSo!}sMiNeeJoFc');
define('NONCE_SALT',       'lbd[;XcaS^*@h%Y0b-3la9Zpmo^KX8:C[aV-ATv[P=Cn+}oX|,,J2jg|M13ATDRc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdev_';

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
