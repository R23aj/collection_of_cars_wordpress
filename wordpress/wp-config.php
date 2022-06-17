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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!R&s;q7(H#~_!C%ApbCe`4`+/(qbwvLm)iozr6>?NrCvA|NX<`l:DiN#[i>(p6/~' );
define( 'SECURE_AUTH_KEY',  'QDqEBNQ7K`myo,P6x,/~fD1Oak+)F|m#ZD64H4uesbJL+hK1G;@U3[CB!{m3zaLl' );
define( 'LOGGED_IN_KEY',    '2Z.wxa^U>0ZtmyZ3`c4=O]4ZjQdC}u)SVQ+HQa|,|:>Wx!{Gs#u4BY,7xmlqQFF<' );
define( 'NONCE_KEY',        ' k /Ozosc?|{Z?Dd&=&hH0q_B.cbk>1IRIFGWfkMH7KgeAyA]44j~?|o&Jp/_%[+' );
define( 'AUTH_SALT',        '*X,.%8e{?E#qg%sY#/)C3B>vDJdX7{!DqqZ(&)}:QVO!)A#=^KIpcv)w$R:{y+=,' );
define( 'SECURE_AUTH_SALT', 'TQ)+6Qz7EKd[L/4K)KWaV6R;hSP,qX$dJ?alhIZqAH:1%t#:bRHjR(iw|RE@%A&z' );
define( 'LOGGED_IN_SALT',   'z<+[VV-zFLRbQ5Sww@<8Mb#}|W[LHz%n^1EkBym2EX2 ,dH8t_p0?|`C}}j}PU+K' );
define( 'NONCE_SALT',       'KR>ZZHF`LS@Bsls]lGRU0m_%QRXMfBFtIr3Ah8r?d|#KuR5ldm.8+Ek9g<c3JeYT' );

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
