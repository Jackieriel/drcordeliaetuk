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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'live_coach' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@aksu2015' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'gG6,RJ /j>KX!fXj{HqU97~RFSb3hr?FT iCDUml~Yi.p,@E8v7_XzS(VF?MnDM1' );
define( 'SECURE_AUTH_KEY',  '>qb# s}2IfsR1WA5n`?;$w @v`z^K7XYCZ]$GMZM0(48#?mdU_hbju;zP4Y9F1wF' );
define( 'LOGGED_IN_KEY',    'cWzr!BvEd)+VdGNO;K78u< t/{w(@:{u(YG-^+F3D Lkd7P=u}6VS`1KUyJzuY4f' );
define( 'NONCE_KEY',        ' -n3:[SL(>/iYv-xploJ9:rWCNfB%NX K<&q>s!FBz[YfwS>Cl:I=CEnoTjAo247' );
define( 'AUTH_SALT',        'h@eoP`u?f?2LD$pS5LEGQ8?f2<91H}QF~q4l.{w4eWy`Wa,L=^;rycY:q@o!^g-6' );
define( 'SECURE_AUTH_SALT', 'Q;%:>Woq~Xeg*-Wo9{:BDJ40 B>_iF<Xrlu#(Npk^+oB)B}t+<[]l8hA1t!A^If]' );
define( 'LOGGED_IN_SALT',   'g&U2diX?)* ;j^$nP<uVN;eNaAoIsKxF:c6&}YeKPiB$5|D 2v==|>M+)itJt}H]' );
define( 'NONCE_SALT',       '>*6+*3{mvf|8x=KMK2C6M%k*2.%=*t^rCuB,]Xk7rH-N>uyzse3`+ q1]R#wS>Pz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
