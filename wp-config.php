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
define( 'DB_NAME', 'hamzatanveer' );

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
define( 'AUTH_KEY',         'bR.Xs5pD!LISC~l{=m>6fNbAd2%;1-EL0Tt?VmX(Wg)KFM5m-sd/zCVdB4BnM>Th' );
define( 'SECURE_AUTH_KEY',  '0?ouSsqWzsM+9DzoO4xRzV,40p$S!^~So}={I+^J&mGsG8#[YD3G07mZS_M?6&~b' );
define( 'LOGGED_IN_KEY',    'keGE1bEgB=MRG^I=W:UYLL^e|2N$0l@R*dzG*_sBUCO&U/&*_R[AcrNlD#Sh;qsl' );
define( 'NONCE_KEY',        'QSKGH?^pq(2agekTR*^yA,Zs<9r1L}~ $qO(5<(?$p1h>U/3p!VC$}kvh+&$7R2@' );
define( 'AUTH_SALT',        '.+Qs0 UF!BiJvuKTzM<Kt?.*e~Fbt@RzOT,,T`d?pT@+8_nnPSRaQFNIwoE5tMw3' );
define( 'SECURE_AUTH_SALT', 'Y9>0#_d!i^W{3?goyBD*+h317 K#yp{IK(KeACv,F,r;bhP+@Y.++:@36OdDBMV;' );
define( 'LOGGED_IN_SALT',   'Z=6B==tKut38`$qFucmg)g;QE-H25,@dijOM#Cs>mlf-fhwKv<1Fa^(G:ltG|k{_' );
define( 'NONCE_SALT',       '5T&2pXAI{/(:XO8oU:3yL:FyiJb5=cF45`Q>U7XZG@-C~6?mR-OXZG]`fWmI]=Vl' );

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
