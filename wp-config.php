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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tvdekho' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xvcAK7Nus[bWyz6sF1Yz&]2f?bMWGY 6-wbZvd#;[xg$fUIAyg=]fy[ kyHz#bOS' );
define( 'SECURE_AUTH_KEY',  'PKD>^GW~HT%5aVkdPU $8~2!e896mj=lMiuC/*G{~Ry;[0vzd6S,:bD;p:KOryZd' );
define( 'LOGGED_IN_KEY',    'o>P`x2p4zgOp=q|F$>Y1p63CS[$eDp]GrCsebPym]8,gQj_9qrrz8S9V3imoy8+:' );
define( 'NONCE_KEY',        '3VL:Qt]8~{X*B;XK?I|y.p]VX+xaf}O6^==?+2oh/0frmpf<D3]na/e%zT,! [hH' );
define( 'AUTH_SALT',        'Y4T&XOx`777L}E^Y{=T2B<liyedC[?U9wOC5obL.D#^n,]*sAQ)Pm)-Y`ndM>?sQ' );
define( 'SECURE_AUTH_SALT', 'M.[TPFZT,|JI8=l?^3?=WL`=n;IRzjNMI/^9^x!i_!(]7~cMsBbV6 P3moM>zURM' );
define( 'LOGGED_IN_SALT',   'Ov8]3~/%]JG=s&5f)a)JWI+F}>Mh%/vv*y6na;9Qkn~C|9u{cy0`; TWZ$.Gra`0' );
define( 'NONCE_SALT',       '`5&4]z-P0c07gc{Kj5*{urWrp54ce} -lCs&d$M}WG%QvSIX-Z_J8SSvFBL0gvEW' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
