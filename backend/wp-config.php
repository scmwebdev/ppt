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
define('DB_NAME', 'ppt_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         'Y~rHfL)r)!~;0ATPA}|Kw>kWpcZc0{eOqOy+-]%ICbu^j.k(I98L%J`ZSHL$u#QG');
define('SECURE_AUTH_KEY',  '-&`iS!Vtzu_uWAY-UgD7~q~y^iatn=a~b?@9e@vLz}n&K{W)Q8TF_?u9|eaeU$K$');
define('LOGGED_IN_KEY',    'L5|Xhciid-q<o%buG|NXZa0o;X|9n-Vm&+.IFuNzkqi_1Dvn+Vu0-voM 0[/aA%F');
define('NONCE_KEY',        'altH$HZIC`]6[y7$ r!^=Ny*;S$-OX82aS|]A_$@wY|3eS[P>p#X+.w_)B2~@o|{');
define('AUTH_SALT',        '@of2l6uo`cb)C ^M(oQh:OY6A!NaIQ^H[#vrJx&8?Eo0Pr=_kVtyWqEcd|+FLjIv');
define('SECURE_AUTH_SALT', 'SXKO5Lj-h9J)a|hJ~=FPhWMdTb{`*}RwqP^9iCz9*+t_Rsqv> r3{~`1=8D*ILok');
define('LOGGED_IN_SALT',   '-B4-sMQ5TlMzkmpz3[x0MSjMU`&W:5|AB2,SP!/mI8o)[gV6biZE|2+yMaYLYIo-');
define('NONCE_SALT',       '{C$a-ZY_hEjEvZa~m93=i/0Krx*$%r~!n}?ZnR}#4rXO;Y:#/N%J=Y`Z5AoD:dc]');

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
