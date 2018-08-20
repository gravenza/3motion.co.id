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
define('DB_NAME', 'motionco_db');

/** MySQL database username */
define('DB_USER', 'motionco_admin');

/** MySQL database password */
define('DB_PASSWORD', '3motioncoid');

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
define('AUTH_KEY',         'b2^&iURl9WXQUzqj_tbwTPavlx#(Et5s7^JO9BSGG.EuJ:3!D6T!AR5j2t43Ns=S');
define('SECURE_AUTH_KEY',  '>E@$;mr[IP/W#NRu@IWjNSQIht0Xb)!Vp)boymQhN7@,mlrXlm]GB*IC&%y+7+,`');
define('LOGGED_IN_KEY',    '7xA@X2TCB^78m{(L<ZBBB>{+YpQ.kKi*RG@zy:FUS?-q+u2 p)&oov*fK/,t#UWu');
define('NONCE_KEY',        '?EL7.`XYO[KN(N0|v; z?Tb@R$7zYa -/llv.-&eFgrQ>X77~.^yrwhSydnZ%%C`');
define('AUTH_SALT',        'RyY:!5#(972:a5D,)@e$H+Suci=!<zlk$5tTY,s14Fi]=TZySDP4~XzOK,;,0$v<');
define('SECURE_AUTH_SALT', 'h^9O42oHMS#07l<$P^|#0HIICuG1L!1IfxDq>3N9*YLhO-9;>3Et~@zVm{(!SG$/');
define('LOGGED_IN_SALT',   ']w_TSdd3wZH@ 1Sju/m+6IQhzJjPwbb9A|er;7V.&exHl4!7lHWR1LIvG2nqd]AG');
define('NONCE_SALT',       'Y-5aN.v{r{wQa]M|.{!)?YA8<u9<u95sa>T8ej/S@9&p<zCl=`v+:wJGA]-HU_~%');

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
