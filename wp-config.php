<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'WSRDeXB9TUs6Wz5meVhLc0BEUSZSPmhYSCBxO3gzVypyfk9VY19iNThOUy01am91TC4mMENZOTQhKk0xNDJhSg==' );

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
define( 'DB_NAME', 'bilal' );

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
define( 'AUTH_KEY',         'X3a%KR&!/ :&_2o]M&w(~SKHK&zLU`4d|079MulL3v4W7Q`+CiNZDvl&.;Y^ZcDn' );
define( 'SECURE_AUTH_KEY',  'rA# -ho7w#b]Vten:n(/3hywd!v}h[BL$3q}my+tl48e|6f23Y][9vJRQ~kXFS_4' );
define( 'LOGGED_IN_KEY',    '%I]O`Wa)p$4DxLtLXHr#%3-|NxOU<=;l/N/` Y(0[d0<jI.({2nCJB[jXmHG]SD>' );
define( 'NONCE_KEY',        'lbL*souakEi;$EaSh_Of,p*Ba]cn[)lC&;0:<j_&}tOUXg7q|ew-))pO)n<nI?9+' );
define( 'AUTH_SALT',        'c&?E/T~!cDCy lj+Jt0279rL!xI*v6rG;RrT0a:ZtrCTmS&au5+_i1f|o17Z(&)9' );
define( 'SECURE_AUTH_SALT', '4hU8a>`!%_!S@vi94Ul3a#-N$1QM};M>P&m(%_>|#)Ju]RKTa#}L8YRU[&d-7MIS' );
define( 'LOGGED_IN_SALT',   '|fiy+7=qF?wz5z)H@pc^g2)W)miYZT@@_]_1;FLx?bWL!e}_CuDG9[IIkhfMzEs}' );
define( 'NONCE_SALT',       ')brhY=rJgl<e[.VHI-r4lR`oS]i![YH|8TZ)+y$p^ `alpuCC)s.rYCl;HpGMvZ!' );

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
