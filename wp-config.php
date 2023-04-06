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
define( 'DB_NAME', 'LAA1377707-cropdb230405' );

/** Database username */
define( 'DB_USER', 'LAA1377707' );

/** Database password */
define( 'DB_PASSWORD', 'passW0d23' );

/** Database hostname */
define( 'DB_HOST', 'mysql213.phy.lolipop.lan' );

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
define( 'AUTH_KEY',          '_f<QeG%}L[>fUElP?I&zL):Ew`K8qAOUsD Lv jzll!#GG#:f@7V]lt_91tEpn<z' );
define( 'SECURE_AUTH_KEY',   'y?m}P!O=8mh~Rn(ttRCTDy,6Kal=dX|;8h,l>mX*Cee 80tvmlR_`_Dmw,ABaw:r' );
define( 'LOGGED_IN_KEY',     'qBZ8yi:@6X)WJi=,U5cm6D<uE#>e`Grw*9Trj>dCW0iE#IUFd4O/}ugVI_wJyagF' );
define( 'NONCE_KEY',         '@:F3d-Bq|P~L0?}w3/~@6ad1_|Acl.sJbG/c5 1@EyN<.@;LB4 p%El 6ry{s-O6' );
define( 'AUTH_SALT',         ';7_4{lunqE`2#@@#LiDwoBjt4) ,;&WnZ ~ew:)/H$73f2ks<m|x7$r4)odJN^WG' );
define( 'SECURE_AUTH_SALT',  'BIgA]Ng>v7F74^0>v9y{g_g$Emj(go7nt>-.T=p=vo2K#m L7#~048f uE!{t1xy' );
define( 'LOGGED_IN_SALT',    'N_CA9dP;a=/M+ XF-Z?I52At1m*c~%8<R/zc2@^YEbx;Gsd:cCi^|$[O!#0=ng1E' );
define( 'NONCE_SALT',        'J>|G*Dj2.rwpEMY@^nnY?$,M ei XF#SK<i#21m9/fH[D-An;Vv<8+GXel>67J|b' );
define( 'WP_CACHE_KEY_SALT', '-=u9vJI/LfUqh,#`?(-KTy9+3J /?O6@;zWhcc-2c/$u#;*?@XcZ=p(Bf SE$1L8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20230405232556_';

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
