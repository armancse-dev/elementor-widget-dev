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
define( 'DB_NAME', 'elementor_widget' );

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
define( 'AUTH_KEY',         'z0IJ)ISWMa_E9=YXCqm>~MMvjpb`Bz_~3d-[[!gj1x`!O&yzyyE+10Z^.0jw1Uen' );
define( 'SECURE_AUTH_KEY',  'WXv+IYhu{g)e#8%hyb<H07Z8=w+;]n(x&P4PMG:KBuAX41epR8Dq3F{-(5m/(1i$' );
define( 'LOGGED_IN_KEY',    '>r5$A^-V>a-[+J{:z!F%.W7=%?LoycQ51;UuY9e^0&/4#[N7e=]N/$7$^3{Tk?x[' );
define( 'NONCE_KEY',        'ZvTRj<Wy!9ELlT?fT]P0K-,C&L}&EGk7pI-4OfWV`lx9CU#s><i*)*3}h^.K%iF]' );
define( 'AUTH_SALT',        'H:^h.@<9:OlfsHquq|uu~5`A_VNK=niP_{]E1cG$p,CsJ/Y>A>ZFFy&pn}2jiN%|' );
define( 'SECURE_AUTH_SALT', 'O07;fd]Kl]PI7 _O|6Vy}H8H9{V2WMIr*7MVSDm<yFCv0)6S#pGzO/~Rv?[oFk4f' );
define( 'LOGGED_IN_SALT',   'Abp_eqg_;}D`Y&[zha;wD]CZK/ [A5$^PYOe|Su jgi{_uG <q8U;Jx{]%XY&]ma' );
define( 'NONCE_SALT',       'ChC9])NB_o9^BmJkVAN5#%KlNl?CA=CrZN!hgIb=+fF@3k$LcFoRlh2yZjXxm>FD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'elw_';

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
