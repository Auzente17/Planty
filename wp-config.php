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
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U8WZgn.iC/0w6[K=l^}!;~2gbFcfBLhki:EK+>{kvI[JkH{P|bH@lY2S?c:{fJG[' );
define( 'SECURE_AUTH_KEY',  '}3Ei35iUp<M|_?>%db<o)+yVh%30D,3[D|L}K%`%{69*!w@93pi6m6M[yM@K7[IQ' );
define( 'LOGGED_IN_KEY',    '0Ol&j?B|`ddKT7{nu5qwdwFbT<{{^8n!;3H+efr?yd < Znpx>bW}eYTVDd2aVRz' );
define( 'NONCE_KEY',        '+dvTt,h0cqj FaTHfYx$}~VjW>{3,/:Oj6H&hLW7P-1]zw:/T3PXs~A]w38b.UUy' );
define( 'AUTH_SALT',        'HG/6.<93Q*Wy&m.7Qf__5DPnHlvYe@I%7sn4Xh+iv/p4M>Q^[ph]:Kt)IM!rP7(]' );
define( 'SECURE_AUTH_SALT', '[dT$TNYkq!f ZF6996gchQafpdU=!f|0xydErPNk?P~A`|1.|nX=L>^xqCQd=}NJ' );
define( 'LOGGED_IN_SALT',   'MAl&^K-S3vQqJD:9ew0O*2h!ATzs.iedk3H=.B{; zhf% y?q .levS !7gXm/}:' );
define( 'NONCE_SALT',       '96$a>A5)wczT,aEHQfTdGOs%kp6H_g4_/;r_,G9KPWu=H_T]_$8 -k~)DaTEM7 C' );

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
