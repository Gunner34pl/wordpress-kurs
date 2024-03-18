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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$!dGGA4G!YL;#dm^<ai3!O(b|*_bR=fU}nH>R_Nn[%DQFc5WZ#u{#_EX47SB:9l ' );
define( 'SECURE_AUTH_KEY',  '_6xo&M/5Ns&ufQfI%;m<fB}BE#@}dOj2lsmGuyC|aO%]ZSHjvW(f22Tg1rA1o[VX' );
define( 'LOGGED_IN_KEY',    'H,:/X2G Zb?k89e&+%y~ h8IjuLf[Bbw@(k30Ux5?_SV W3[=x91?sIU@Oky,pWZ' );
define( 'NONCE_KEY',        '^fwC]56IeFM-1rmbe?U#*n^*8{M+N$DXbiy4b Y,{QkP+i._4eXj&D&DIMY_*F,+' );
define( 'AUTH_SALT',        'b#$r*kboOo?8V|;dSgyp5PI/_se{LwDrKxg9r12C9d(L{jKB9WteYAvo[?C#.O>|' );
define( 'SECURE_AUTH_SALT', '$:wZA.o0o+DWg0lA{jb,hU9X5Iqug!Mc=Wa_b-Lzb^OjYxT+7]~jI/f%0{huLq=]' );
define( 'LOGGED_IN_SALT',   'rV*%EAFZ@ea,uqCbrcRJXrd>/wGmF6?G&CZMnTJTV2DH?JK[:KbvZ`Z&x6JW5rhT' );
define( 'NONCE_SALT',       'IG]0UiR1I21Di3`24-UZk7P^B@s]d,1BDT_UG^se9[F+}Elei;+4nIm<;|nV7 O,' );

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
