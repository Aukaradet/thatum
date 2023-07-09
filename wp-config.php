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
define( 'DB_NAME', 'tha' );

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
define( 'AUTH_KEY',         '45s<)9-65!-:()KGw6y%6e.[sz;YX%Bod`LvK3aj>:NZn<m2qBg:|},+=O;Es$]C' );
define( 'SECURE_AUTH_KEY',  '*@D6a)+m|=r9G ]idxR`NZqhP[yfE,WxlVq:(L2GDg<Uh_^? +h[USNX:t=}cUiW' );
define( 'LOGGED_IN_KEY',    '9+-h;(VjJi$RMu(R6Gkk70B~WQ ;7lx9qGbO{~=BP-Y4lEF|Yr]k07>?;9m7/`hi' );
define( 'NONCE_KEY',        '6xkV^J|i**sw_8q-JSm7,;]}Dp%;~B_H<SNdDKqabiJ^;7 I?3.ld1/WY}5&UJs?' );
define( 'AUTH_SALT',        'MHB`UP@w4^{~E+P~tW0 kI3+-Xvy*Qa;USs$P||(~;(3<vxl!>q97 I+Qw*Y*Ulc' );
define( 'SECURE_AUTH_SALT', 'Wh~8j]5N(J?O+Ztor:;qK(8`l>zF,L&-=#>bLy=~$k#gFRYx#be00RUtdCR56/,w' );
define( 'LOGGED_IN_SALT',   'c2^m5CgrY^=mv?C>/1F6Xevf^!7rq{rjFK-vjpLW=SkSP[Pp7xG$CboOGJ[2@GzA' );
define( 'NONCE_SALT',       'a_B:]9yL^w]8~FlP=T5Q~#Sp!3tT=-w-q=48O5E|h=:tRcG`zwX=~WKcCwWdf8~n' );

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
