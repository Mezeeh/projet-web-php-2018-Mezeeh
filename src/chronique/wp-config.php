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
define('DB_NAME', 'chronique');

/** MySQL database username */
define('DB_USER', 'chronique');

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
define('AUTH_KEY',         '0,PESe1h32nYsV=De=$u,dMOJ<%xhsn}>8g@7LE3n+PW1sbOP#/]UAai *iA8&oQ');
define('SECURE_AUTH_KEY',  'Ad)+$k<mKv`Ry?]gpr`wnXs0mXn_p9jk-+^R_s $V^4@jDBlb<>i6}g~>S>(ID$!');
define('LOGGED_IN_KEY',    '4?U.sL+:df^hXzS].Ie/Rn4Xq/hj@Qzzsyl8ISrj*6[me6-L+qylV/*$pExkS&cc');
define('NONCE_KEY',        '|y8.(8<RcT|<ejRS/QtbLO_8Yb!v?*v6$,ppP84* NO3(nD+8DF crnR)QhupVye');
define('AUTH_SALT',        '8i.6/zfH[$D=g:?K9lEh/q> on1OFC]6p4oJmG+Ly@JTb`iuY?5?ME`Oayd5k[Ue');
define('SECURE_AUTH_SALT', 'jxmD_+?5]H;JE9<fTCk55;[N(zm?xXI(1gs~E{na*ZNW$+OgQ)WY}Z)j^})1gO 9');
define('LOGGED_IN_SALT',   'i{f*-Bq1fZ/:LDd.?WMHJ`,V:#6Q^q#gCOW*fi.yc<=h87g=Ad{<()+__/<S&G4F');
define('NONCE_SALT',       'u9R{OM!W]_!+gi4,>B7Ah!Trx-/w`.4`[qBEx )l~aU;Ni:pXR>BlZ4u&eN@gxBz');

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
