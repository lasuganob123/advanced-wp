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
define('DB_NAME', 'advanced_wp');

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
define('AUTH_KEY',         'aERC -x[2#<-x*x/d*]^1^l2m..LiX5DWVv J(oHp/nWg/`AXzMSixZeVso+ZXtY');
define('SECURE_AUTH_KEY',  'NyEdBFlA^z$L@/o3oRnt|8_g[HtWBj9HBJ4hDG@#Xe|2zRi`2^c3xLB;ehNbR@f>');
define('LOGGED_IN_KEY',    'n{s:WW70{=at9oy]!yIf7`iU=3&3Tz}Z]F]!G.,d?UASxCM!OpLF)QD[cN;,8bWf');
define('NONCE_KEY',        'ruadsI{Whx[jM}|I$@TGd|6V_}r+?/%awEVW0.Z@#00cmn@IUw=h75#^;&$75Vab');
define('AUTH_SALT',        'cQwHEdF}Hqk`r>nYkKjkS@IOw}KqtnyIM!7wg#1w. V78xpfvvVT;x&Lc|iEN3I5');
define('SECURE_AUTH_SALT', 'B&nC`Kf3Lg[%3``yiW6|TaO8$yoXzFYo/LRPWBs)g)nD&NBc`=DJ+^U{bmFF+?t9');
define('LOGGED_IN_SALT',   'F6){;zb@*]D]?3.QoEjbbZIz7e5CUg1>qGZ&usUY:1^Bj~/%(g`tRPL*.9=;CXaK');
define('NONCE_SALT',       'tu|[X!E&(~Z8(/eyq+*P>;;?170;Be>E_AXpeR?WhO~)T>~PFmI;! +|~&fCmwmY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aw_';

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
