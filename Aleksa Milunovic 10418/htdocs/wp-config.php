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
define( 'DB_NAME', 'b31_29600656_kurs' );

/** MySQL database username */
define( 'DB_USER', 'b31_29600656' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kursstranihjezik' );

/** MySQL hostname */
define( 'DB_HOST', 'sql109.byethost31.com' );

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
define( 'AUTH_KEY',         'POnRI?>c;a%6(!5^3&Y-eRrijFQ).Z$)y;)/9LF%3DK0cpUGJ_.u1KJYfOcEv}3V' );
define( 'SECURE_AUTH_KEY',  '&< R9vr;{D+1C@BRT8`1n_ho5F?7v+HbeHEi5[1~QRp<>b.;788xZI E~s>TL?qy' );
define( 'LOGGED_IN_KEY',    'x32jnrO1fi8 omUlCR!SsrcLs8.Xcj&^!.:(9Au|Bw,eKoP0!&fE@4Wm57h=mt= ' );
define( 'NONCE_KEY',        'NIJ^wP[lZv[wLc+Qp7p3jfpV`{3P0tP<15aRp$T4(2Q8]{iwpPYmZBg)o;YM*|t~' );
define( 'AUTH_SALT',        '2(!c=awV2}LN?kmhxULHRoPMF,=ZXSjR;:VxA^D`tiEM(j>xkCutn<ek%4nbq5^_' );
define( 'SECURE_AUTH_SALT', 'na]$`6M7`H6I -bT8]~v428*2})`zC(c;o{8~J`4EHs[Co-}n&>jG>6E9<XG`&{k' );
define( 'LOGGED_IN_SALT',   'nls2.8%us ^o.CMSS26)LS! 9p]&AVqXbx:@6nNkf,ICPbk@WTS?9ta0WVn/CNUb' );
define( 'NONCE_SALT',       '.g a6K)Zjw;HtzN3yj:;a#P%[IuYu76xL:(0BeFN1>j;S3DNsVlZ?-l=(4auF_Y)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kurs2021_';

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
