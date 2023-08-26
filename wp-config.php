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
define( 'DB_NAME', 'wordpresslocal' );

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
define( 'AUTH_KEY',         '<6jt*lg%we1sXqHhR>Igc9+pY_K&9$^Bm$8qwj@~5=N=%S395 21J>8(hyr>%{hy' );
define( 'SECURE_AUTH_KEY',  'TOn!HsyS4Rbm;0XgWhMA}0vd}S- h:Fhap`/G37Zwaw&&=B%D8qY:h;to`)f-!XB' );
define( 'LOGGED_IN_KEY',    '7L!>jZ@hhgIq$(efxDWn`ZFT7fHGvLRUwh6vjEurEFT%DJckC8i2qmr_Y6BgPZoK' );
define( 'NONCE_KEY',        ',S!M+BpIR35{ou9hDkwG@~8xD_hb-<;ecf5U%c$u+vF! wA!h$v-nYE|fd @W*FZ' );
define( 'AUTH_SALT',        'v@47V }iTW&Nnd1te:!Z}?^9{wvnBF(.lMDT0lD3)=EFHN>F%@i{I-DVYD~iJA-R' );
define( 'SECURE_AUTH_SALT', 'SyiKFeSP=#T}wBR;*c^JYgX?i5 *`mxW?lS3RfRdoa/E0jtb^7mK9/wI2IG}s1k5' );
define( 'LOGGED_IN_SALT',   'y$dSwe[<gS<BhTp?;axSOv)9z)NrPON^5rs!{Nnp7A[z9)Yu8KnwrDmJ35v}%5V#' );
define( 'NONCE_SALT',       '(9:j$m>-e`i,P9)QHihBZ~qoo~TX>tk)$aBRk_;(1y0Naa}_J[1pbS!fIkU/8a_<' );

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
