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
define('DB_NAME', 'ejer_2_exp_11');

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
define('AUTH_KEY',         ' am7JQ[jfe5T}0_Q|?;o&v~<aZ9Ki%;}L~K@}hP[rG{PwWypKM&IAA$?@anncSQ:');
define('SECURE_AUTH_KEY',  '%`|bY;*e/ZF9.M:]UN@2B{*A[65!E{O<8eUmN<mjXH7@zRfr6AMhS7VQm.bvZi:|');
define('LOGGED_IN_KEY',    'Kxak70(4cd!f{{=/ ^C/TecVRi<`,S.]r62W,Htlr|HC[4OHbSIMj<zH6CnruqUg');
define('NONCE_KEY',        'bDnVS`gGL~2-OlF 2mQad9mNrFbsfWbW@p9@jG6`<VhCXH*$KI,R1xeKu8Lpz[U0');
define('AUTH_SALT',        '.r3+!GSBC>]qH8)3H%w|w-`qu3Z*|p}u^@^v*?]`hJr] 5w2e%pWhcNMpz#+Drtc');
define('SECURE_AUTH_SALT', '?c)4v{v1+uG)5e4*$>qh2MHH8RVhN9(bNvN6*=GK|{?x`MY(^dYnMoh?T*aRKMF9');
define('LOGGED_IN_SALT',   '[}8d1V* VTCngs1FW#]IK3;&^YI*kS>0wW!9h/<#7-LVb$c<[W@Fd(w*N4<d=,8F');
define('NONCE_SALT',       'U+*Z~l~xf7DE`R(g1?er]j+$MJz(7S;3.KHUVSF>)4b)Py(S}=(`%cz|Z$O7W>FI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xl_';

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
