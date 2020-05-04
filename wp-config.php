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
define( 'DB_NAME', 'testwordpres_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' FZm,%MfV${s5j]FSA[5)a7f_zXVTn({A]G[W_(D}UIrv6Lp1[!f+vU8f}|Tj6ar' );
define( 'SECURE_AUTH_KEY',  '%#[7~Q<Yg$pVQ^umjBT6?q25B#7W=!$ObZ7Ea7#z8g~KP8vMZT^- }ox7Pm!c5-8' );
define( 'LOGGED_IN_KEY',    'wA/!R%T=m[*LhfAAoNIJp;fnkpuX?bqxAFt:y5oUWsB;1 yUqny`%.e-68d.mq,g' );
define( 'NONCE_KEY',        'ZE6UE^mYh.s8_OI*^?%,0IrYL8jb&Zrg,r&o~P9xcZu2{N!Hrf+lhR1fB{VmI8c6' );
define( 'AUTH_SALT',        'O)g02A,q0.8*jJ<k,nP_I 2@:ij^75(6bYu%9U&qeb]R>Vh*2Kd~8aM~I|Yu<zh#' );
define( 'SECURE_AUTH_SALT', 'LGT/^PS|#9@}hTAkgK&2_6#@-C`WJY0>]nzdCw<{2^l,)#D$G5[lB}21@1QC2VdR' );
define( 'LOGGED_IN_SALT',   'pb{CNXAdC.j]GOFbYuj~Ul`V&GniYQFN 0$Y7xj3`D}@hvot>wHxU|pxwv!DlXeE' );
define( 'NONCE_SALT',       'Mb6Z$lc=5h@/,S]M1t([LdfMOy1?4+*4)R![.Z5Fm#G<O;IVVi#QIep z`mH|%yJ' );

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
