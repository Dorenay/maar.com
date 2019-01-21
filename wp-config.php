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
define('DB_NAME', 'compas1_client3');

/** MySQL database username */
define('DB_USER', 'compas1_client3');

/** MySQL database password */
define('DB_PASSWORD', 'z4v2K5HlFGv7');

/** MySQL hostname */
define('DB_HOST', 'compas1.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_ALLOW_REPAIR', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nuDEX3.v!iaU02b5!BEhntOnmA._>lN.q^MYDDCl{u;%8?=9^XMfDnIdoBzw%B{ ');
define('SECURE_AUTH_KEY',  '!`6:UC]2;Qo.46)[3aBf89#y4T`1totu1gF&[!V`e6VvL~U ;|UIq>kkW<^|C+B+');
define('LOGGED_IN_KEY',    'z*/U!DYde3PH&vj.=K~E9Z@KH._gN5F6|<@3oe<]`Cp43lK|VW0&f{[sn/E=TJU#');
define('NONCE_KEY',        '(z-^dB_z(ApM$VQ6?rufs1<J!x| K8Jr-ulGQX(={PC1GKIRH3}9`k7Lqqt%+7<@');
define('AUTH_SALT',        ')c7;+se2`8+1WQ=MmyUR(ZS.N>Hu1O?};wzBQEL(YfwWB_T@{]8I#=YY@|?n:{TU');
define('SECURE_AUTH_SALT', 'FtSp?Me#g8|NBZ{@6|%lDm[^v/z>zSc0h{lP`[GPQg2=|u}/X~Bdvq1q:_n+VHB%');
define('LOGGED_IN_SALT',   'JERK/EW3-5h6xZ{mh<xto_^jc( ZTZ:<nFc&U%I^A,1=T3jAECxAJTE<tKYdbA[x');
define('NONCE_SALT',       '$]>UDWAZXsFBbh/N>L=DVc%?qoLJ;RAg7m-b/M=ui1+*Wf)=L.5nJ[6p%<G9}KWa');

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
