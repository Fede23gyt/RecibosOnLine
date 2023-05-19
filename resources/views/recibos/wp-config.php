<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u769653743_R8P2h' );

/** Database username */
define( 'DB_USER', 'u769653743_Lw7jI' );

/** Database password */
define( 'DB_PASSWORD', '56i4i4s6In' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{w!ueUOF*er;8bh0ZH8]9w<#s491/r8f=1k^NI1yY/YpGi|EoX4h6`MKbzT+W7#o' );
define( 'SECURE_AUTH_KEY',   'Xvn,Gdry.i,Fh:D&&&0I4{LwYcCI-0++&*;] [c(iVdVzXsz5e6{Cv&Pn(8}8J-q' );
define( 'LOGGED_IN_KEY',     'iS?1SENpY/FK$LRcIgXqhQ$naSAir1#j2/z<lL/dyJG?m4G7ozr x5Szw6]Rx2qP' );
define( 'NONCE_KEY',         'WjazlXnvdyCXJ0W[@?~,b}n,!Q0Ce:0SPM][|;DQ#^`ZN]Df$Q>_|NN.f+858<.N' );
define( 'AUTH_SALT',         'UlJ;t3!ek2 ]Xz[9H]8m6Jgg6N4rZWLcvH#0}%xW;~qA%h=J:8cCAyNWmu[Zi614' );
define( 'SECURE_AUTH_SALT',  'H~d*ogPTcR/iGqeX{F5?OjPooD 5v+yLco&-76ljodfp($r>]Ux5lO|U[E;Uj*MO' );
define( 'LOGGED_IN_SALT',    '(c>)GH2IDKR/=CMUU^1ZPl!Q?[YC(*_hHNPk&$; H[IQ]Z#eC^PW*!C2iuY9Rj7m' );
define( 'NONCE_SALT',        'j5LENfiqq8IUEoSK_Rz.m{!S_Z;?ngA=AJ|S3LVZ6;+#MP;X@5Ul,%-$/}&/mRfe' );
define( 'WP_CACHE_KEY_SALT', 'wV&$fwol :^lYr;;9Mld6ARn,y@qDFA)m2c;JfnhA].Fy1vP_2DcDQum@LeK8[6h' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
