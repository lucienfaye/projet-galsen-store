<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'galsen_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ti/pvj3ATDRZRb&pFA{!)+[+FSl0^])W ~-`1[oC7ZK6@<,1R`KLZC;3RowXRij&' );
define( 'SECURE_AUTH_KEY',  '2aM,?mV8-UR~j:1y<,KdeN.;g4KuN.;s18qQ%!K@{&3Pc!Lsv!n$lFb=xR}R,VPj' );
define( 'LOGGED_IN_KEY',    ':5/zvDd?c}<w[LNi5stZ$WxddbS(1yfr|(jv? D#sFp7L|{^@#TMH^#iG]L_;Gq9' );
define( 'NONCE_KEY',        '(dv@FdY*EcKWFUM?.6zu %_^Fos:}DBG]b3EkwjjN@vMNwbh]gga.H(M>ihojjHO' );
define( 'AUTH_SALT',        'C3r 1k*BdB;~-(+-0rxwH%D|Xn9W`CvZ4%IYQW=lC90~tH&0A*-YArmi*f74&w,C' );
define( 'SECURE_AUTH_SALT', 'qrV`^J[tGDlBU=!=Op&Qkm,g!Km0R|!HID]#+XATF+M+n^G0Gi|!/1U_(IZW#?ZL' );
define( 'LOGGED_IN_SALT',   'hTJ;(,zP)4iS~tG~y,T2rv4i.N1v< KWt`7`#-hZ|LP7v1auC|gYxr[Y{(Dd},dK' );
define( 'NONCE_SALT',       '-G#&|-x?%ykb*E=kR|utN.pvc!8xX7IAY5Okx+)i.]Dr+e@v=idM&nM<Mw5=C0pI' );

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
