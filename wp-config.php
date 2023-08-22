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
define( 'DB_NAME', 'codienlanhxuanlinh' );

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
define( 'AUTH_KEY',         '+,y#w2y_-9[9vm<KkrV&{iDSVxNa4l&9E1?RlwwKdzZr+@mnI,$hS*=c{DQKLtb ' );
define( 'SECURE_AUTH_KEY',  '=zK[hXYrBML&bL/l:1SYGB.T_2;i7JOwE96LVoE22d|.weE&d5n]Btx!x1mrA0@N' );
define( 'LOGGED_IN_KEY',    'C$iIMvaCZ5a${3pQ396)03lU/LjaCROa_J6%OO+dG)Uy!rI::I28]m#U&VUOEAg@' );
define( 'NONCE_KEY',        '6uCg .0RpKh</el2-Q-r1bE/syGRL?V8kN*jp2N<a86fj7}EMK@) ./qj/H`[R1[' );
define( 'AUTH_SALT',        'ACH =;)yBZIaSF6!P0t;li1x(^^ Qb`BiVM7llZ,P[j$hZ|p2f/=CDet7<+sQcqU' );
define( 'SECURE_AUTH_SALT', 'yr^pCV sqhPp6ajc1@WjJc3ZA5{?s$gLwTzf6c(D,c72 AV-^r>}1g]`QY76qPL#' );
define( 'LOGGED_IN_SALT',   'o@6DMgPO7{h9d2D?Bp:i.``8/i3>{dTd._{,]vH4F:$QOpxe f+2b$$qrN*mbAcU' );
define( 'NONCE_SALT',       '%1#M[Z,0puPkFyzgZk,IKd#oUdl*?6A3@5$odH_Kq%$h.EB%%:kfyQ]6}U/plSoL' );

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
