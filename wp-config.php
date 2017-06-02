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
define('DB_NAME', 'inquire');

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
define('AUTH_KEY',         'D#]_.f1|84=j0^^<uZ}]9,>ua~l _4ClnG,z]/`h>PUZklL/pM)?6@rzmKA2YN=.');
define('SECURE_AUTH_KEY',  'Rr p|h@}W02|JK2k{1sg{:PSNL_YIZmLq0b i<a|f`<1X,T-~.SkjO,9rf4`cmqV');
define('LOGGED_IN_KEY',    '}$CC$ud|@7ZC.Mk!d2]}[I:A-r2m`P.qI{Q>=4vn&H#eycv{1xpWm`Xm`pq+#&yI');
define('NONCE_KEY',        'hR<&d7x;24]WCedm{vC0I-2O6#d#M,w Pz)%%i7)`gyj>6g3;q,s|O*s{v60b9:4');
define('AUTH_SALT',        's-=:qgd1C9$J /_pUe~Z`5=mq^PO_TIP+NVT,BQ3Nj#]D[dzn:$ylV%ldsa=woXm');
define('SECURE_AUTH_SALT', 'i4nr !FmIw861UmSGNCk0%kIgFHQ^(Z`gVu;`/,;3Jyj@F,L@9]1|cOu:+O7dRMq');
define('LOGGED_IN_SALT',   'a#7OB)Xv!g=D)^tI1@zMiU&_Fpn~7wLqB`oF#_0,Z=c-WV!EAcmjGQEh_Do2L4PL');
define('NONCE_SALT',       'khT8EVn.}wR1P43mQ0{GH{J_(5fw^.B_~<+[@&a|<-!>j48Bo0;!V:2:Kom21#*4');

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
