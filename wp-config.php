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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'megha' );

/** Database username */
define( 'DB_USER', 'msmegha' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );
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
define( 'AUTH_KEY',         'XzXd,z44%S%/sUI/FtM>P2~+K%.i9rDdu{fD3r)zVnC_FRWp#ab++(^R5N(<P{,o' );
define( 'SECURE_AUTH_KEY',  '0Ua+F#ud.ST7~G~f7T@NY#%~1Tw=M r`x;s0Ut!Fqa5L@iy?|Mg3Q$^Em7`_pCm&' );
define( 'LOGGED_IN_KEY',    'C5zio%zhGD6D.t@yNHe6V/#Ta7wd=TSD,x+T<iLl!MT*h&.+&Rq{Da|ecS[@PgS<' );
define( 'NONCE_KEY',        ',<rfy8UwO,aMSX HEIe`KcA*Ik,~u9D$gh^OSz$|(SwG nmFQlw>UEt~`c4mf4%m' );
define( 'AUTH_SALT',        'E_T<=_?ar>O)7 ^(sN)`*BP/?yow3_o}3P d)W50zH2=2Wpa`c_ ff)tJI hpn&C' );
define( 'SECURE_AUTH_SALT', 'en ;^p352f{[3|>Pow4`QFXaA#H188 1h|fM]f#)V`dMRbmV5*$JSHM6HcWIF1+d' );
define( 'LOGGED_IN_SALT',   'Us+E=yE6yDjI|m[$uK[X.;bUjF/^]6`2sG%r.g#Vk[jjUuDv:#(u|g0ze-c)JU?w' );
define( 'NONCE_SALT',       '6L$qY|9L8NP= wN$.(Bk4dMwS$8Au6tFFixhZ#/}^O~u8>2l^6{wxL1unNx_MS0x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_ALLOW_REPAIR', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
