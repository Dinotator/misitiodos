<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'misitiodos' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3a04632fab0820c5091a8fd5d9716e19e13f4c5f74c72de7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dRN^^OaQJBi[D16P7}!guoIr(G?{Xr9T{:ty*|Z[PsJ{?GNxzFV4`x}jAU7T `@P' );
define( 'SECURE_AUTH_KEY',  'J$OeL.`8=/y> !j/Z7W-0Bn}{m2wmZ1QKAl$|}#T6Q# 475gV){>LY?Hzc%+wECJ' );
define( 'LOGGED_IN_KEY',    'TtM^06pXVA&58b8_eJQ1^l6Rl 4PD:w0mIEBnLw/O/)ZQ<[O~Fq`T Hsx`h(^Ny{' );
define( 'NONCE_KEY',        '^{,^3Ng>{@2l:pV%q7Xi<%fwM*Ykx~r03S7#&HU{*S>PwrfDdqR{Lgkk)`[>#@8T' );
define( 'AUTH_SALT',        'CRF?gCDa|5ik$ZrGn59n?2M)M>p% 6OxU`XH-TI@1lkgMNCe<>m![,WQz0VM`56M' );
define( 'SECURE_AUTH_SALT', '# {yeOtq.en@kCQ EY3L=fF{,l3bo}1 Vu+x:Y2]c9O{NUK&GsV<p=j`2lU.**>(' );
define( 'LOGGED_IN_SALT',   'W)`[B+A{/z~92|kq4<#5X^xC)i@9XzZ)DT,bsIadVZcq@T +qY3 /n.JFxMjY@aP' );
define( 'NONCE_SALT',       '|UT%*sS^C]9ySsP|%(9@YHV>? BC06f06)T$/PK]r0`nV&EP#Zcr]EljeF2]{jy ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
