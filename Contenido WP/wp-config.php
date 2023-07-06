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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebawp' );

/** Database username */
define( 'DB_USER', 'pruebaWP' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         'EYsM7s:ge_D[ckI*Qvma6]j9i[YNm1:iGT0o9Mg`zC,DC`rQJJo/4mx#w!IE$F5x' );
define( 'SECURE_AUTH_KEY',  'I]O0@ph7T9!-+MT|FC6vTjkK)AeaA##;*_RW;hEn4b*f{pV#>1CW_%c~S@y_]A5%' );
define( 'LOGGED_IN_KEY',    '73fDH3!nJE3#cO(|{`=<kS!6O8.6Dp[hpeo@g-BLeqRH6<($l4,s-89QjO?~TrY:' );
define( 'NONCE_KEY',        'r~elEBQQ`m}I9[WO9wV:F]gJ%WQ<tHQz<G!*pQK]/z$2PhlK}3AZpX 5JcG8aR=R' );
define( 'AUTH_SALT',        'tH~#wQg5//>!X8^i=4#JuET*&|/{qhUXEDy_xiXQ)3qTJ7g4efQqE:Z]:@({W66a' );
define( 'SECURE_AUTH_SALT', 'u0ST/hhTA2H-2uZWqK8x^AN5u$?j_JXH %|iX #W9ag$_Z8k]vL8]L7!{uQ[o6wg' );
define( 'LOGGED_IN_SALT',   'oe3b~CTS*u,EL{N#pxMmwWXWh~dN`%Tk6%}{$Z//*qo]LGIz+Prg-:D+OfR9+PpA' );
define( 'NONCE_SALT',       ']L?Sgz8-cw26&dDW(E(i,NC=RX|^g,FWZ1)07v:ov%<F$+2:4$U-*40H@U vKj%^' );

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
