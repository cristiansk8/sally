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
define( 'DB_NAME', 'mercande_sally' );

/** MySQL database username */
define( 'DB_USER', 'mercande_sally' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kzendZP^s1g=' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'pdH-sS(jMd7jtvn}jdaQp5Vv}eV?|/8/h72s7m-b9_rSR+;/58][r;g_,6L#nG)R' );
define( 'SECURE_AUTH_KEY',  '1-*d,a.@goIk xT7-y 16DP-T!kGt1vQ}uq21%T6@lB^DogpxX@;hh7k$x)(2i.}' );
define( 'LOGGED_IN_KEY',    '>ZKS0@&)4l}c*PX@$Xed.a=gty?Ef`2!U?UwpqvGhGJ yxJT{mxO&arsp2*2J37P' );
define( 'NONCE_KEY',        '^-YYHD +> )U]-@I`P@ t,2Fe=6hw^mJ#]sCO_iBYO[Xe1%89tS2^F%kL9Q>K3TI' );
define( 'AUTH_SALT',        'g8GMn6eV038j{lSMqd7*H34c5?C?w7s9p8Rv=?mnl&)!%TRh]4<54f0c;m7PsD5+' );
define( 'SECURE_AUTH_SALT', 'HaNU2djE`Ov*rC<yRo-8)1O?w;[G_VHEN58RCf(qmDGTu*,B{h!-$-;HvaM/iXX`' );
define( 'LOGGED_IN_SALT',   'kOT}J](6$rMVgpL#.r0TCywVdK]rDriWOX:wt,Avq(%Zej{2:wK(I=1&2b02?>lB' );
define( 'NONCE_SALT',       '2Q7ic4q>J*(7])8`QKhCA!`.B]2d!VMh]l3[CkuB]ay:_Fg9MFhql[eWX g9M L1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
