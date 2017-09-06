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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         '^!GSed/F=W.lJAs0C0A-+{o-aNO wZF)9tx^]@K<O@6U#**ZJ:$ [U9:H58h|/g-');
 define('SECURE_AUTH_KEY',  '2dJ0fm9b()YRGB[ZGvONItPrCOk1zQUM8+2M,E+]Lg$QZxBcq0bM)_3|&-2MDgSt');
 define('LOGGED_IN_KEY',    'D;!^A^4!C4Q7H+EA>Ko_3?rWW!^k%CF`Yw$e1&Ia||4CtV-s@9 2`yZ8;w7sW#c{');
 define('NONCE_KEY',        '4bV2S-wI0gh/u m_LH5L4?#iSsGr{_6ZQ[ZwwX-Wo+5h/{%LS+<|qzH,SAgW`60k');
 define('AUTH_SALT',        'zV0XnWRg]JF;u=3*n@sGBX0Zow9_b(&B~s@dYWVNG*NgPGtXMy!#x1Y+;+W*QAy@');
 define('SECURE_AUTH_SALT', 'QsHb,HOA=G?_Y:I+~hh+}t<r(CsZm^T6HYe1c>.8kf^71/j:E7r)--I]%4Dp#AH|');
 define('LOGGED_IN_SALT',   'V4xL3XslttNL~+pl-l<$P>) ri%=t$NdUc8U,g5#Lt,A0;Zl!)1[+!{x84(ili*`');
 define('NONCE_SALT',       'FA<_2^|wvw}em8|?8{J+rr-@<YrZn)N>@GQ`2A~momN.R5_c{+lcJ<gey.}<ay%`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
