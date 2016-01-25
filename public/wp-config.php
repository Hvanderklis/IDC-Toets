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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N~Dg6KIB`d%!>@K|id1G_[VhAHfh7u+H%D,,64FbDHkTn[u=|E/LO-<b!QI{aj,W');
define('SECURE_AUTH_KEY',  'VCdcho?h^<?X6W>+fhSq`|HdZ*g%4HLP?}^@XKE2uW/bbjja(:M: +QNbKyX }{w');
define('LOGGED_IN_KEY',    'QX1e:h:cuz/ul{ZU<x=w0^iqs!Ru(uX!v;,Lc3`O9r<yIavcx0gZ ZH}P-C0|NS0');
define('NONCE_KEY',        '-7i?Ltu=,X-M~VkRZ4r|vBB:zY}(DsLG/[W:pLQb*ak%>-BJ5`_MyWaV2 53N9Fy');
define('AUTH_SALT',        'E[{7cbk5 tr-jh(->hw>4!gMhuZC+M RP#5dOKe+Yzvrv/.&k}>smM ^p];}-k%]');
define('SECURE_AUTH_SALT', '`84u$KvFCsbY3$+X9Lv?X*@OJ$019R&^y|=Jh{a-.-e:[fiAA<U8|UFOk]+JOwwh');
define('LOGGED_IN_SALT',   '%HS/!HM`!D5vH1IB;Or4BF]A{Nwr)b v/,YX KvYn*,J} m,zVT?[<)&hS,OqVdl');
define('NONCE_SALT',       'v(Yco:|)MWiP7{0>0VaLv(|ZG|r^hS[8Q`${aDe3,~UY_KnNIsT|[FW3@-;3U*RF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
