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
define('DB_NAME', 'wordpress_practice_20170601');

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
define('AUTH_KEY',         'w5^9htsp@;tMA7h7h4#L>%p+9;^>qz!iA-V[8gZ x$MvXN*H-xXJ4?Gv2^k^mOPm');
define('SECURE_AUTH_KEY',  '4/7k#Gc/L9C,G)a3PD>OO yfwL^O:coaBv7=l_p%-f@}B>[SCfoh?Ki!].R4J$6[');
define('LOGGED_IN_KEY',    'lDlrEq{cNjO0%?SPTZ.0(a%ujrMZR|uO[,Nu;<ird.;gL%8a-Y,4 2H0^<CQXzGw');
define('NONCE_KEY',        '8#259#e}W9D4YTBj)YHBz55VbPI$@5F)1$]D@wmhM!#*s~,F|hxYDK~!C4qxhaQd');
define('AUTH_SALT',        'c>KCp~e[lsdKp!{h*yEFd.[eTJl/Mf^PpFUn:6+Vo<4&9^FWYZ:y7^*o#hfavmgZ');
define('SECURE_AUTH_SALT', '1@fC4TU]EvEhn/o|QKs!Z6SmB}gBsL[j3SGfhRiWbd?33!>#H:U((9IEG<FohY:l');
define('LOGGED_IN_SALT',   'C<&lw;MYcbl[~N[w.9Y7f>d}xQ=K]5ftKlJG,$l.XlH]BS-b&?jYcaX{M,(WR~-Z');
define('NONCE_SALT',       's5F01)NEJ>iN&deo0<:^*gNqV)|BUG{aB[)sZc|oz-a$@*P9PyDkl2d)s&@n+Sme');

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
