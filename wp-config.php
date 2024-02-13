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
define( 'DB_NAME', 'writter' );

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
define( 'AUTH_KEY',         '9Sl}`07jRl>:m9qLH6nYI`oxq0Xs`Dm2~C4KI`(p(70B9>RkOg0&A+UQspGJIu^B' );
define( 'SECURE_AUTH_KEY',  ']LHV>B<XM(e>c.;|U<jTUfhdp{a5Cb@h-}PeS/jEP*Ea?xyRfV D6um;c;m{QEx*' );
define( 'LOGGED_IN_KEY',    'M4B#]V<O2zn){HH1MD?Nflt5[Z+UQvBjb`N$B5~0=DyF=YXxR8<IMt3:_3oJbvAu' );
define( 'NONCE_KEY',        ';p; rQOJ(A1]vpQM<N:D68&4,J)C8wME#]SI5m/]q5XYD%1:hk0JgJ^`q&N(&5bK' );
define( 'AUTH_SALT',        '1pnto>k$#;li$KUmB-QCFmd$7^jSM=4 7jf2~9^49(]Rfwc<E?zR/D+@2}a#N`gf' );
define( 'SECURE_AUTH_SALT', '?Q _D0ec9(CM@>?`2V*Zp,)(F]3wN6{=YHDbU(_FS#058={xr5]eV.E?dZ$(YA$X' );
define( 'LOGGED_IN_SALT',   'bw.Pn/f:#tdz2=X,0<vYpv?vFK^]y)0*mVF7}?8H8I[K}5+P#:2Y{<kY!KAnG:7!' );
define( 'NONCE_SALT',       '*l`>aRG1~U$&QOp_4GIwAv<tP,lHv6ka@_MK)mIyc;QAzj[~J#Oeqh=+5^2Q&!<.' );

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
