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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         ',Vc0HU;`x$d$XgR!7Y|o90^yqk0I{0>CTT`RP4/~{G~aotjp~no1bq2CkO$[C  +' );
define( 'SECURE_AUTH_KEY',  'B9m0J;!G>4R4X/vV!`MqNc2Qzb!%:|W$xG+xotpp[WzZ`gL1+g76*H2o#hSV+-Nz' );
define( 'LOGGED_IN_KEY',    ',*p1Bv>];WpQ;RxTg].hCES<eo{/t6Z=tZ_Mg+I<1u26@:]]?6JJ 4=k NgaK}Dc' );
define( 'NONCE_KEY',        '/_7_]XWP`SJf*R68aVhB3&E@b.Ge6C&TyU:nDrM%&2gH;B_Dp%-*e&86k2Y!.(ak' );
define( 'AUTH_SALT',        '_d;;5*[_`RDxD/d.?>css^28Q)6<O&}r>)E~d:TktG[zEw~rlZJQHsuNvl<*V;Rg' );
define( 'SECURE_AUTH_SALT', ':JdD5aN#TZ?heU&KCrt$L!w%/1JMK?O~K=u}@Lj}O4k{`x[-obuOktngv(;g7N;T' );
define( 'LOGGED_IN_SALT',   'Iq2PlQ{mB|weAc.UmND!fm[b>67^X/68 tGQI+0+j^$:{|~}YCC*+2uWo~r.;L?Q' );
define( 'NONCE_SALT',       'DD,T~9*DHsf&LGV6U?ad.[.M{l]4g#!a:5YRztHd~l_SCHm~6QO4z=7Lt%EIyXA[' );

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
