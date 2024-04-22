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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'james' );

/** Database password */
define( 'DB_PASSWORD', 'forward09' );

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
define( 'AUTH_KEY',         'Br8qHL*Jht[U4aowc:d{:unDx3KM[=@vn^xZjMh=iTf)kt1#i7%xd13[ltIDV2J*' );
define( 'SECURE_AUTH_KEY',  'a&5l38%>1aRD2E[A;i&U|Tw=+>Nz -;#_#Gfk@CZwx$.? =,32YInUm!j]B3#LL6' );
define( 'LOGGED_IN_KEY',    'kM/2V^ZlPQvKK[+taTtMoRx_A O7$yllEj#Klw5n4!W,d]aRJ+$b1EbiBPbijPci' );
define( 'NONCE_KEY',        'HpA6{d*}&D8_GfVk~^q-;o?a8E/c_TP7SbkAZ0Wnt@SULq(W]FNLHB.GQ+d=M^lJ' );
define( 'AUTH_SALT',        '`d>Ob`qbt?|R|^1L(ixigPWOk^pxfCp%(sZ!k04r%r&$vVK!LFoDQY3h;RQh f=v' );
define( 'SECURE_AUTH_SALT', '+kDv>o]FfSELayKbZ?|*bNo(GIq2/uMVG1+D1GK=+~n2%6I*^YPT~t7CV/eYB0UO' );
define( 'LOGGED_IN_SALT',   'GSNU*-e0l8*MERH1dkEYa%h5]^6wVY#fx0>_ut?y, 0[&9iD]r^NeJKqM,!03hN{' );
define( 'NONCE_SALT',       '1qJ5ySnKjzlfX}<=LnlCY%od=&!+[:+h6RDQfA=^Nx<O!fi.Fdp,xMw9}< AWU15' );

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
