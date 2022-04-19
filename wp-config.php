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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'g)>l*4zpb18qN9M`ar~5)-tgS(ki1chHB?YxSz:ooPuTNe&U`S8+:88zY4-T3x d' );
define( 'SECURE_AUTH_KEY',  '2)`Qb`Yh~U7$CQsK2@e}Fu|Foj.~He#WbHS%i!8aMK1U-mXw0ry7bqc@VFRn-ZyT' );
define( 'LOGGED_IN_KEY',    'opNc`x^#.<0_x!a[teTu(q~{v&[a`|KelcP0`k%gjgtR#h:4qkd}ZKIP[* q^#Fj' );
define( 'NONCE_KEY',        '@ a^F(o)YD|r!X)/i+zAf.[Cv+;mc`8aYuet~N.>;p<Mp=$?$S}y!?C9eUdzW6g7' );
define( 'AUTH_SALT',        '%Tf9J]CuB(L6o*rZl?@<1b1o2-q;YZ=aH0tb+@:~Qaq7|ZgY?70pXBpj!P#4YtW_' );
define( 'SECURE_AUTH_SALT', '_E|N^FyS}F#_P+2Qn:)gF%}W#YHHyx,pJ}9~:v![OSYx4CO$lxcT+zbS+KH5RN7z' );
define( 'LOGGED_IN_SALT',   '{ciLZFd5Y1GpvzoJ)h/67jcBR(SM=WU|qkL6?&^F01[!Hilg=$s}3,/!|W0=RJW5' );
define( 'NONCE_SALT',       'ewWK`)B&46^U$9:6B/!MDyL/=t5m ][vLM-G]IlUNOsMR8esg%=t`h26@?Z6.YL(' );

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
