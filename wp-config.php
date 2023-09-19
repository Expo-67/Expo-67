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
define( 'DB_NAME', 'test_site' );

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
define( 'AUTH_KEY',         '/_Lus}jXmpxt<F|4JVKd$;q>8Z1z+#:*M~LR6h]JbUBpJ&r9TKl@QY#6>W^[_/KU' );
define( 'SECURE_AUTH_KEY',  '2Q%Qe[M.i]%m&JS7)iA!@6-WT`@.^-{&^3I]mf?/}~vv,L/Wz1Hr+3|oalD{rHA2' );
define( 'LOGGED_IN_KEY',    '0qglmI||LR/Uq&OrwlPh*ve2=iSD64f_ep#xXY9?=irNl]Py(Agh{e[@ChsiGmX@' );
define( 'NONCE_KEY',        ',{!RR{es y(?;(Xt_U,yFkI3yLSBS?r /:$||9(yk{,1o1P#Wxa@T(*bEkHYodJr' );
define( 'AUTH_SALT',        'j@1Q:I[v^*_y&tw$te=u{CZKP*Jg xTP(XvJYg3f=B?j<?]Oas.9P}M{|!JSBd^T' );
define( 'SECURE_AUTH_SALT', ']mkc$mmN4.W@/k6;tg{@Y1,m?QbhQr7x[K.T@+XHR[D<ACl#ZF<kQNFpL^X>V/DI' );
define( 'LOGGED_IN_SALT',   '[~FKR Hcr!-$~QwJZVF;U:Y(~!]9$<O|F}Uaq0stJWwSCFb2E:NxV![1ZV;P6(Hi' );
define( 'NONCE_SALT',       'Q?eKi?=k<Cf4k,JC0&39nz7#M!]6 p(+:mEZm|v.HD^mA;M#G~u:Vq~M`e<55_H|' );

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
