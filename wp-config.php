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
define( 'DB_NAME', 'nuevaretina' );

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
define( 'AUTH_KEY',         'k(?S4S_>e3wnd-~>p1uYetvHDZ5yU&sM20iG{5ZiV/2-DnweLvN8],$ivP-]hXN6' );
define( 'SECURE_AUTH_KEY',  'ATNb!&rM#B2bQWnvQ>q8y(mBlu,YG+}AY-Ubf0uhmED2Lo&~8O.Uf<m6F@&BL<rC' );
define( 'LOGGED_IN_KEY',    'UY]9r0!zKsWr>|+3x)*?41e;Ql{*[)2:4`Zvzx^<jVbG_^[W_`Rl |DebHH%Dai?' );
define( 'NONCE_KEY',        '<zRDwyL!(|TQC/Do)46wywr:cx`t3cj>j&oC,,mXBRE<v=)yh:XQ5o7f~@#]!|I|' );
define( 'AUTH_SALT',        '*Bb?mb9%#.?;(q.]*pBM5p}ff)YLg449W<]eYl%CcDRR?X.D|{)H1yM@y3{>,zvO' );
define( 'SECURE_AUTH_SALT', 'u29!FrVTNg:Ts_mwsG:4gTDm|DV&W6QKi?Y%3ji9xiKW0v~5XQmRY .vywA;nSq:' );
define( 'LOGGED_IN_SALT',   '!(9-p3Qgjr}x)NRy|jn$W48r^4*@=%Vwx]-{]e08JwdR2[z}0A@)1(j+E{LR9W<-' );
define( 'NONCE_SALT',       '.wDW?o_nZr%[N${kLLW=Z.aMpNs2s#dZo1ooM/VLx`q<Po%;O&e:.;i2tV5ZM@z,' );

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
