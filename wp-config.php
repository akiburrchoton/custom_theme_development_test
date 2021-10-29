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
define( 'DB_NAME', 'abc_insurace' );

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
define( 'AUTH_KEY',         '_RV.OTl*Y%(xH--k|7%zg={tuJUBf[~6fZaU7EyS;[V!IHoSRZG(ld6^0VA$}.|Y' );
define( 'SECURE_AUTH_KEY',  'Igy5VK%GQ,THB,}F5*Wx$<w4@!9SD{UHz,OLoieD[93-puJvhqt(%oJjHyR5Rbk+' );
define( 'LOGGED_IN_KEY',    'D=u -yN{9y_uA1svK$S16XZdtm,y#Um_)kE>spG7L_%M`=59$4L/uwDzznG&//}v' );
define( 'NONCE_KEY',        '@b1S;G(k@eE8V) {GuJ-xABbhiAs/O6=ZS-yoJV~y-#/L@)|iYa}S#!3EW$Ferax' );
define( 'AUTH_SALT',        'GZ |;fi9yWCA?R*Rt`QgLO5&iI$w6UmZ1q]MT8MG@+_S]g0fib.US K=h-~a`5dS' );
define( 'SECURE_AUTH_SALT', '_L3uPm|<}t@:G:lLs5nQ[?_d*SDVOv@2N7NS./}=_;[n!DjCA9(m#1|O6Ck7r|gR' );
define( 'LOGGED_IN_SALT',   'z[q+UIhd {n8<`{rKut>DY)*x!mH:Xnb.V3t?/Dig+~ ?2uj[[YaHsOsyopEu2xn' );
define( 'NONCE_SALT',       '_,]C)m{v.-j5[j+j=4XuQg=fI-G<x|B0{=Ao+]no8JO<an^QO2`Zy)u<8Bbxun4_' );

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
