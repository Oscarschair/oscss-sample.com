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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAA1377707-sample241019' );

/** Database username */
define( 'DB_USER', 'LAA1377707' );

/** Database password */
define( 'DB_PASSWORD', 'passW0d23' );

/** Database hostname */
define( 'DB_HOST', 'mysql310.phy.lolipop.lan' );

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
define( 'AUTH_KEY',          'x0}FyIxM)fFxd7<fz&_c-?L?X}.7^D/0U*3$V+xhX]z1NBpf[dj=FUr%g_562hi)' );
define( 'SECURE_AUTH_KEY',   'oRI}nFZ#]Qw3f{K@MbGX!:k]#3WTAL<B-Lid-D1|6=|;3!^L-3fQ%FoFszNlJ|r`' );
define( 'LOGGED_IN_KEY',     '-!-RZ@+Wqee{s)k6VP}zM.*ZlcI#t{yok p_f3QCzPo=t=P<PO.Sjd~p|}gKJ+f,' );
define( 'NONCE_KEY',         '(6fMMN*}O9N:QUPlh]P:`Gs4MBQ>F;s+z~2`_S2}~,K)HGsl8.vTEMlfPEh+x7dx' );
define( 'AUTH_SALT',         'nj<C%gYGS*V{B@Fb?=O1P0q!?W`T v|hqJ,,$^%SK/i)bX}{DOFRW`@2ss![3JNz' );
define( 'SECURE_AUTH_SALT',  'Hi:J/y:z/6b7XG9$`ma^Bnk3Pn K@-NF1P8W3z^}(]]B|i4#igpLMqHvh]goHW`+' );
define( 'LOGGED_IN_SALT',    '*hye-!5yhE=(`;0IllnJL1slIK/j]XWzG`(D|R(tL@r {g2{n@T%ChaW7Fl.vaar' );
define( 'NONCE_SALT',        'Oo,x {Rpw/V;[wDbRxH,Cdaq [aL19_)OF2>>8Z94+h(/y$kZf/>8@a?c1:UL`_d' );
define( 'WP_CACHE_KEY_SALT', 'HIJTqb,O&Y9c]m^VR3r`8v^m8UL`<BYaOU}v#VHdk,f3HT7b u<T6WDfG/z{t+/A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20241019154629_';

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
