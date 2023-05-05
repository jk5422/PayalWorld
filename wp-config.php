<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u536192572_payal_kurti' );

/** Database username */
define( 'DB_USER', 'u536192572_payal' );

/** Database password */
define( 'DB_PASSWORD', 'Payal@12345' );

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
define( 'AUTH_KEY',         'rd>;b09-jq*?Sc(TZwoM( In?3W}t7/?D-k-.E7NkW/*z6r<F<qHm{pPo9sxpbsY' );
define( 'SECURE_AUTH_KEY',  '}vpB5c{h?6%V^($1+HzC5|5VLs>H+B=YjHelG^#CxF,4_X5v+Sq;w9%7AIZ)rJ[r' );
define( 'LOGGED_IN_KEY',    '6@Ipx:@fx@]?s$}~*;B,VeRK[#RieRQ}k)hUQHTwq1^x(((r+9b=|c2krZHe2J*0' );
define( 'NONCE_KEY',        '2L8.gdKXD*B*B{BB[6g2_eDt#Jic$ENsC6&%]]/w}vxuX&Opum)g5*UYPh!U8zA%' );
define( 'AUTH_SALT',        'N?N_O6JK*Av,db.:6{:jFivZl/{|Dq@9`|-mLEhNwg<K<;aO4LS$8q!fD:XA/xna' );
define( 'SECURE_AUTH_SALT', 'mT &bClvd(w!RsYT#yYj.VGmOd,9h~5/8>wYsFQ[/(`v/nZa#z5 L>},5f.9(y&{' );
define( 'LOGGED_IN_SALT',   '6&MRfG*Ba}~Zk,R)~&tim-Fw^b*#}cGstkhb8ad5c;COVX.`Qr#g]~HZ9Zmp@v{L' );
define( 'NONCE_SALT',       'y1.nQx$_k6qC_xBRQ7dO&yXMKZZyG)P0`Jn#P~g0wvZ)&O5<u@@AVU`%~~7sL<+s' );

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
