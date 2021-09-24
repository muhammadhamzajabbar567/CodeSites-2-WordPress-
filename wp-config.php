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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1AQR.1/s%`$Vg0snZ@&`H~6YgHvh8yDH{*Rd0L/8xoi,}(~usg(=a,8sjosuR6!#' );
define( 'SECURE_AUTH_KEY',  'EtRLeA{kgGC0Qw)_vGb=F,yg~<zG=Edm8Vqikbz<?7&}/#kK qa@TYju60lj-|{;' );
define( 'LOGGED_IN_KEY',    'q+&jo[;(o|i%R`A-OzCzn9c6W<t=z4e7OSB+&d^^<48xysW-(xqaaL&]7sO!s}u{' );
define( 'NONCE_KEY',        ' k{_{ot_ljjN1_[~M|p?~c*N=R[PoM!1^K y.bV~eUQbcD`prbwJ]4=p}EA9Y4#m' );
define( 'AUTH_SALT',        '1aSOz-[*8:`he](0W-}{FC4}$^]F/$rvi)33+7BiS}+qDJPqVJ1Mt_3@mu{.P5DY' );
define( 'SECURE_AUTH_SALT', '1(Wpg(Rb$3|M9_ARaM}sS4IgjMm;,?Bk-LIC+=gxbL(kEGoGwOydCla?17>Cz cM' );
define( 'LOGGED_IN_SALT',   'F^3v^Sdq-;?@3PRq WLu1O1v25*=b-v8E:JWoG99S|Wxj-jqnf,giE~QIGKgee/Z' );
define( 'NONCE_SALT',       'UpwkqTU^8[s_{brrU]mL,s]DDg{w1PNLJfnc/9is|`7i [T@kRXV`ymkNe^2(6&H' );

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
