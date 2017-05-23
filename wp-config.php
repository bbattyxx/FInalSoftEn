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
define('DB_NAME', 'ezyenglish_mainDB');

/** MySQL database username */
define('DB_USER', 'ezyenglish_123');

/** MySQL database password */
define('DB_PASSWORD', 'Pass1234');

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
define('AUTH_KEY',         'F gmTN5I,MU/mgyJyoIP=J.[9e8IyLulhw.zFesN6I[VZTKg6q`D=ama0e]+L?&|');
define('SECURE_AUTH_KEY',  '^Ox)jVXa@[x~Wk[!~g2p%Ik!mIvSPv(%J_W8FvapqoVA|_?}hD.I<WM)%^C39U)N');
define('LOGGED_IN_KEY',    '>P/D,#$eL9c=z$RqjEM8n(HiO*!Smz{zPG$8{HqL,,toi{O8TmGKfB)tP9<Z:%ez');
define('NONCE_KEY',        'P>Fv~*<ERe;zjtSn+-Y`Lx/QrDnaTV|V)>uDPgh`RO4od$> ,;y$8_$<_0?/}*GV');
define('AUTH_SALT',        '<iyY#I`+7zt.v{DV}*!#^vMaggK[v#.FxW8&;_^P[V]+ANsCb0iTjN;QL_[*=O1/');
define('SECURE_AUTH_SALT', 'B~{>CC0LQ^A$#l5E(IjhAZaV:Qmc7fmW=s_-KHxs4OMIniBXQ(n&qbq0?p#W,{:u');
define('LOGGED_IN_SALT',   'Q8Lqr,+6vdU~#&#G*ZVe2(tE!;1{Z?2z?C<zA(E4Sjr6_sy;2G1BYlobhCpN`W/@');
define('NONCE_SALT',       '9y_HB}*|_8H!5wdn0,Y|7u/tCWsT<{rEGK%CiwBJ&%uTYfAxvV0RaM}*ZrFipjB,');

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

define( 'UPLOADS', 'wp-content/uploads' );
require_once(ABSPATH . 'wp-settings.php');
