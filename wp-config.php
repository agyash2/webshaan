<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'webshaan_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rJ A#`z+LkL+W!{Lc`<ae093$0js%xbmAcPdR}83^IAt!qVvo^LTV[2^lAS)HO%.' );
define( 'SECURE_AUTH_KEY',  'N0lzO%369&ct$J?g:2{G;}lNr%z8>Q| 9frZbnJ5z?&ycoDQ=mgrTEZvu$qr_9|5' );
define( 'LOGGED_IN_KEY',    'y~A!.o-s7vYJ@vsHeH#_x]HmSm)5cEP{rx|CL>NdhT;<::P.~|akORTCDYPk;*qV' );
define( 'NONCE_KEY',        'f#x3PskUps0MX7J,2i7y{*}jDhyn:+,0TeUj4];X>Uk<J|9TVyzKuBAC5b2COKsw' );
define( 'AUTH_SALT',        ',gW]b~)>>dv9i,{+E&^PsR(rrwI&@wO,~uLVzx?9T2AMk4R9WPh-w!}>k[eEE3}y' );
define( 'SECURE_AUTH_SALT', ' X{e6)H.FL>rF,R[i=C`)~FrBmc83d>LY`5qZBYL7`~CjUGBiBp`7pw*MLcQ%nEw' );
define( 'LOGGED_IN_SALT',   'k-cX@mX(FG7+{Y5Jt^m!bOe~U~*v@/vs^]3?VI~:v3:8&pI_We|.~aa^=b&P$2y$' );
define( 'NONCE_SALT',       'bqQ[[qL4?7+TWi1(UL,Ss@DgG%2w@{e c<pdGWo8uOKIsWdGm0NL3~>IC|5x/s1q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
