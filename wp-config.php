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
define('DB_NAME', 'pcuervo');

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
define('AUTH_KEY',         'S_?@xdvpDM#EPdm?EV>LUYDNd|nLpTY*/FiIk*-G PD,]EjB6P4~et f_n9 M|C,');
define('SECURE_AUTH_KEY',  'jy5ZZz8,Y%m:q>q#3x5U}SROTc$t9f<KKun;$pKN+=aUFYbd2&oPuf#iF/QqAq3S');
define('LOGGED_IN_KEY',    '*oTJ)I:^uqAo!0Qmkp1x-6j=cYOyp[?EI?IMmnn @+nc=( b4TnM6Iks4RT0j[N<');
define('NONCE_KEY',        'oN!c4oE@-OT e2Hfz;(U4av{X*>TssIl/U43yb,*ePhh~-O(*dhlH9O0S>Z?4s j');
define('AUTH_SALT',        'Y<98pcR;@Pc55,LDD#1!g,f@O.>_Ws~7[q]Wy;CPi_.YA#Z+}mG{n_5H]&UnT0y=');
define('SECURE_AUTH_SALT', '{N;^DsNW*lE!mJ},]jy4{_w.A4y]/t~XVCgQHd+ ,:qT(9.>O:hP9EJxQ0hB9Y9_');
define('LOGGED_IN_SALT',   'Bis~+f$TbT1b!r6!*K<EmXnykreBr]dJ`^!yP!r=**bv(YOQfK5S  uh?UuMTo-~');
define('NONCE_SALT',       'tsY!iu1c4vFYgqgejm.s3}>0}@4)brODK53[hb1fQqvV%](]t-]KH&#4_m2]C_gV');

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
