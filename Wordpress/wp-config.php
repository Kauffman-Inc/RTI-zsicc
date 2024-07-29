<?php
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);
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
define( 'DB_NAME', 'zsiccc_main' );
define('DISALLOW_FILE_MODS', true);

/** Database username */
define( 'DB_USER', 'zsiccc_user' );

/** Database password */
define( 'DB_PASSWORD', 'U2c2&h3o5' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'dtCCJ#@<{p+N74<Fa&m%8R$vaIAA/dZDPEzt4Bq;VGdvK2%9VY;`.0$t*_ia1_|M' );
define( 'SECURE_AUTH_KEY',   '{dlZjtJN~4#QU:O^jbig3 G^Y))n?yYb#gI--s}WIVp49?J)Q+fx%ucZ<v@Y,pA>' );
define( 'LOGGED_IN_KEY',     '&%eDjQV!u!4m]M:=;l7$9-,E1M]#d0Fu=PZPSa$Sh^prJ4yeR2k,)pa:T[vqq9Cr' );
define( 'NONCE_KEY',         'hBjFZ2 r$SEEEhL*3i}r!.qsM<J5?THy=aW1Q`dQi;ExVI#`=-3V y>1-QFeM~B>' );
define( 'AUTH_SALT',         'VrO!>FDgl!^fe9DDf7~0oo/v*3?Ma-pVNGmkutl;431qwuL-1[!1,X JIl]a#9;c' );
define( 'SECURE_AUTH_SALT',  'EK>xmN?plQ~Vjy>9U&q):NUYluMJ$7!Z/3WOF_R.j7q2bh[HnPAP3^NR6;Pb(l@4' );
define( 'LOGGED_IN_SALT',    'M^{u!i AVZ.d[5hg|.bV67BY>6By] ;<Z%bx~WA>az_@vKry#]PkMWlGPm_+&{u,' );
define( 'NONCE_SALT',        'fwa#Z)5)fG@=}7viRY%ENdkKc}+*e-j2i7<T.g%=fm!QyH4)V``&re$DN8z_#|;Q' );
define( 'WP_CACHE_KEY_SALT', 'VQ(_|Ei~aNacItV1}@HE-(u3*V*VdbOVtH7I*DySF)b5Xz[Y[_iHM- nwB=UA4Xq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yZCXR1_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
