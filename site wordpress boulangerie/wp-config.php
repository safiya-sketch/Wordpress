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
define( 'DB_NAME', 'boulangerie' );

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
define( 'AUTH_KEY',         '=~a2@y:FjJ9b5Iaz$o.Rp-NuQ)&BWz~:y.;v_|#3n5&n7k(!(+d`MDj-Oo(pf$>y' );
define( 'SECURE_AUTH_KEY',  'Lr<zGk:fP*L*BQ/S4yY$60):/A67HG5ghPA% {|09etTV^B)KVOfTTv+CJ$EA1.0' );
define( 'LOGGED_IN_KEY',    'wo^Z*F2~7R.cUc|~cdRf;G`O&cT?hBGAoQy#`PP!vm`TY3e_a1lyd {y&atZvFhb' );
define( 'NONCE_KEY',        'bSau&/sq)k_8zE_*d;EK<3EnQ;YwPf[HP!cXT(uI&]t9Yt_pxr2<])NiaD)i!cBs' );
define( 'AUTH_SALT',        'E!Tp:^}5|_Qqkgiwi$<-h{i9Jq?dbQV=Z:{wQkB/{n$&.Zd*5bSrY:+N{~v }o-3' );
define( 'SECURE_AUTH_SALT', '>(x-u~/-=Bs@+l@<^8YS2H_U172hM8+]3T=yyT%wi%p<la??%!-5Zz.aMF_MEfg]' );
define( 'LOGGED_IN_SALT',   'gw=Li*7/820h1J?L]|Pk8F8{@vm%T_>0nE9&_ooUBT:52fH}e}Wv]APmg~>E*qxN' );
define( 'NONCE_SALT',       '!Q2beEiK^GLTN,{3;PL32|HMd*NR?#KE(}mBu0e&5(kB9?/!/m{Yg=XShL-#MSrz' );

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
