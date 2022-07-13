<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'suites' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Computers1996.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'YyeJ`*6P6:16::} ]J3uu%mrWo$^-1C-ORvU12XXv`70kw$geCQl)<oPFZ6]t1=+');
define('SECURE_AUTH_KEY',  ']b<!Fhn+uMB.WFJ*|k+gf<L$=QCLoA1W~+k88=EC;[*e)O> APFxIN9znK{u+lu}');
define('LOGGED_IN_KEY',    '-2I|;# evD>~5>wV||F)Xhg{zRcvL-THz)Wl9L%#[m`Mjd#T:Q,GL/(J><e$ceZ)');
define('NONCE_KEY',        '~+Hf+t0kn6WeRe!uq{.o@s#+F/2;QgF+dCZ?Tw[)HgjS8?*+7WvSco)Oo?:|7.lo');
define('AUTH_SALT',        '-FCY?X<liS$#u^fhXYlV14eT&|[Sg|`.6$1(A+|y&Wh*k+4<Zj%=JYZ-$G-pT6:+');
define('SECURE_AUTH_SALT', '1.dD1cbXUonHOd }km3q:ax3-)++%5g4F{3$Rtn+)A,075jo.$a3AV!!wqwf|y+N');
define('LOGGED_IN_SALT',   'bfV7g*=$*Q.qbnianvS>;rxyR%F@f]-xu|{p+B>zVn7.%;.K,L#!J>Emf?SF0YB<');
define('NONCE_SALT',       'Ff|^86b=_6hv|R}DVn8F~G+||D+FLlox]ELGP(G- 4JMAU^u+|$;wNU8v@,Our:N');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
