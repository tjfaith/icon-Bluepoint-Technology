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
define( 'DB_NAME', 'iconblue' );

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
define( 'AUTH_KEY',         'U?17).-%God!Z+&U#)=`nRo^0qUda $@h>GAj$#M$4DcIqF5H&].daLg,i{ToR1H' );
define( 'SECURE_AUTH_KEY',  'v Hhds^&lo3Gl]|NwuyBxhY&A*H$6({>)sq^75S/u~P>0qQ~6:#yUm!x+1p!v_6=' );
define( 'LOGGED_IN_KEY',    'RIr`~.z-2NS}^(gw-qykdc+`k|AcLidz7DehJx2C@#Mj^`LnG6Y%!a#^[6e:hA=D' );
define( 'NONCE_KEY',        '`eMy=g.Fl~C)=!^^s=tXi`AM^N$+<fsZ.^lWyw-l]Mg}k24d<~5!3FFO$MX9#y}&' );
define( 'AUTH_SALT',        'Oo%KXs6Byj9O88Ak|0y]SZ/e8anOpiadgb<rU[5iad,@zkbUbJ!9c6Bu5&B>-jt8' );
define( 'SECURE_AUTH_SALT', '77<z?![>!:v6SX$@;I@0Z[wXmyz**1ld]vc jxd^[,7(3,1Fb+&U6}5W1C;Yz;N?' );
define( 'LOGGED_IN_SALT',   'd/BOun[>T<]M9BTom}jeb)yIW8mx+A%4%e:z|guO}kU;z>qJdAB%A-s/A?g$ Rx2' );
define( 'NONCE_SALT',       'KgohdR(#jze5mw2WVL>YrJKr1GTgVapj4N6(peOOU?r)WBivkb]<dGE5s/~[_^>e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ib_';

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
