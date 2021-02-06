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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WPtesting_db' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mL*MZoDH q0,`H+,1Xm}i~hGrV6>0MCREF~od3J;.3[A^?rS`43$l2K9Kt]}M,X1' );
define( 'SECURE_AUTH_KEY',  ']=?aSzUExVf ^G]0VZ#$=lBZ%1N0Dm*>F(|UOie1^ NG7Z$>e%T;sLSAeKj3TYo`' );
define( 'LOGGED_IN_KEY',    'kS9n)K}[0r1MDo=cO78f),quN{CtxL*$1 rY l}8^S1SaAW&qQv>jFnedpC)?xbA' );
define( 'NONCE_KEY',        'V5Uaa_|hnS$cA<|:,?g0Zjl<;ZIt?Md;~? 4.J<{6W(V)^g4 96?W p1F:Xa&9s6' );
define( 'AUTH_SALT',        'gm~Te*QspW/A>)+!zNbn3J&gb|5h?MJpI]=JO&H(dMxOS;;]RX#CGo2~A96l2{h%' );
define( 'SECURE_AUTH_SALT', 'J@%{.]qF#70W]g(aL/hlg*h9bNRM I_Fej8!%Izj7gYZLF Gxr@x+cUE</An(hO5' );
define( 'LOGGED_IN_SALT',   'i#<9$lI 6k<,3P+Qi+rBBInW-(%YJl#iNnz;>+e.Nm6KAW3SEgVCc6yf2wDS}/S_' );
define( 'NONCE_SALT',       '9Jydbry4n5RFx~.vJx*SB[/#WJ-mdFW{N`PG#nj3UCR$0bG(`|G9&+zuR9ju}nq-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
