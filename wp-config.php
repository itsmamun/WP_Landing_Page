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
define( 'DB_NAME', 'WP_Landing_Page' );

/** Database username */
define( 'DB_USER', 'mamun' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'q_e,N0u8DuR|]biqo9KVa(KHG6/Nd^E)HE(0$P@pDIb3M( ~~]s096}wsYR,bC4 ' );
define( 'SECURE_AUTH_KEY',  '5]v8]]W] )|_^A_/0/4,D)|hBaeN.E!r[3t&%JLZv5{B9!kKkO{b[#pI>&j$S>)V' );
define( 'LOGGED_IN_KEY',    'oqPRx*9S&{#va+xq<2qp;1N#@i+yucp{E>ttR }]lZA]_qEm^Sz(!+<ok.HVBC+&' );
define( 'NONCE_KEY',        '<2lYBa&z5)ynNmak()VDe93?56*v[;tR:>cbcf{5UR>_bA/ e!;QWQ=Xg?qPdse-' );
define( 'AUTH_SALT',        '~~zP;{7PGe?.Z}u9VCGy[Du+)Dh>QH|-e&clnn05(fQG0m_jL8d@$tF3@+gje3h}' );
define( 'SECURE_AUTH_SALT', 'lS/;(Fo7Yc )[I>4GF!+`;G=]u~+{C2du%,8nQL7:lgJo<;!Rh/V$l5<:d8cgHkM' );
define( 'LOGGED_IN_SALT',   'Kqo{$)~;#ItgI6NO;$W2JKwLgs:z&mqd/7svrK!&Ex/$)aPBx,,tgT>B{gbU7h70' );
define( 'NONCE_SALT',       '6{={7ppKhIv(2HwO{&6hBJovyRp9Sm|AMW.*^J4+B&(!3r{nU?J]<xPMs0.i*7/N' );

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
