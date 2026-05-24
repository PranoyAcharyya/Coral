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
define( 'DB_NAME', 'coral' );

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
define( 'AUTH_KEY',         '#%1h](dz`R7@u@O3~yhMF%E:15v_k#R-BY0x83(2)eG->hz~lWv1@BtwfI)eL:op' );
define( 'SECURE_AUTH_KEY',  '>T.2$+ #z[s)/8 %opvJv>b49`Vm;LpNjG+FiQyy>H|l#M?|}(T[`T%5%IKzGCiF' );
define( 'LOGGED_IN_KEY',    'G5Qzm2T8>{k$]{LoP7)<9^<=?7zupU_MgLmiT~|Al(.dv4b_8?s0@fI5QxlAD-*?' );
define( 'NONCE_KEY',        'zP]RvJ*N4efCgx^YS^T@jdSo)-X=^XIA=E>_Nu6s`ns&If2_PZ;$0gqt;f#cS;_1' );
define( 'AUTH_SALT',        'q^h<P_Tn~+riag^m}l]/h<8tvLKCjzp)IhT|nrp|pc7y(?uZ3/;-SKGGHbACBNPI' );
define( 'SECURE_AUTH_SALT', 'Ho/SUVp=}3VI*Igm3O>/@2jbSP)jM.H (M .b/gc1:=>Vn_,Rk|AJ)|OE!|wT.SP' );
define( 'LOGGED_IN_SALT',   '~Ha37V)mP*~*H]R/cO;Tm4.d!@.Yif@Dl|3R_gwk?N^shuv0M7Q3P(fx}~Bi(<EX' );
define( 'NONCE_SALT',       ']d`h`;mOZEHW.3HsxJdf$qTFiv>5%d_uL!od?UvkV-Ie4_gz] 9p7g(4a}fT]:I^' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
