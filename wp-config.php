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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u190358327_SbVLD' );
/** Database username */
define( 'DB_USER', 'u190358327_sIffn' );
/** Database password */
define( 'DB_PASSWORD', 'HzfUrvDmPs' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          '+LL![pz G!ETwP1>YfwQhZdCh?*-vVJ)cSL-I8}|C%S&q4z5I6(#TW4?4sv^pxWF' );
define( 'SECURE_AUTH_KEY',   'O6|nY0:]_b]Xu6{)kP!!+ nqbciG`L|NQwO8.m;C`if`t^@`ek#,nCh4HV`O-K{<' );
define( 'LOGGED_IN_KEY',     'cSVjl2&7&oesqAMulr@KQpb^t&bC=Lrj=~yH#f_A1wd8dcJ!w/JRP*#*}umeb1TQ' );
define( 'NONCE_KEY',         'Jj72Q.F04Q[{`O=]EGarCp%!9xv5kkR2NEU.`g,98W$nIt:~)=POT5qIC$/-awu*' );
define( 'AUTH_SALT',         '`nR?84c*4WZ-]s)9joz7=(jv02[#$F?o$w+e}oj[PSIyiWn*q#K1@RdD#2iigUKm' );
define( 'SECURE_AUTH_SALT',  '5XszhkV#,Os;roAefUo5~xE*hEbZWv3MnRk6!cp/ fl9cY#zD.]d{%-(crsLz]:l' );
define( 'LOGGED_IN_SALT',    '8IDqJn8x<7eB:>ye:w#N&~0AXY[kt>-*2D0S2bMI=I*]sKs:aFrr!ILnV+69FICl' );
define( 'NONCE_SALT',        '%>.C]#j^FbiE*X0}!]b=CWH_Cewt2$D~&*7PVV}w0:Bz<1`a[EHhd%(~piF&v7(T' );
define( 'WP_CACHE_KEY_SALT', '):b,}mg=DQjb~Ym6{H@8k;(s.p;s6={[JuBZ3[MU_4,1}?tG1QyL 4^f0m;qhD(6' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* Add any custom values between this line and the "stop editing" line. */
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}
define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '32302a658ed13ead7deab2b535e7ca02' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';