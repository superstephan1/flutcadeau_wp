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
define( 'DB_NAME', 'flutcadeau' );

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
define( 'AUTH_KEY',         '9asTlc).dLZc:FDDolegdfgi}3fcts%,*(qf#j>@RBK}wplv3V4GpiBUQ_Dj5],.' );
define( 'SECURE_AUTH_KEY',  '^JzO^Qaa8~u/Nx6:7y1K&*Bv{%O?}lKH=cW]<oD>!#l$(.o;C(>S8Wa4a=MO7wci' );
define( 'LOGGED_IN_KEY',    'h:4uge<~BJO554GsV)bFd6X.I`Snprq!d4VC]Kxa?5 IhMjJ](;jvsVO *K (EI_' );
define( 'NONCE_KEY',        '%p>#jDDho]eksI`vsh#gN+^,11~~<2B(OWNZH3.~B^`~~kisZ>PtEN ^_A^6Uqn=' );
define( 'AUTH_SALT',        'fn,gOD2X]%Hb~D;4J%6r-H;>.6^B{Kxk=Trgj.t9kmAM.D/XCW8?1*l-u`b<64Ct' );
define( 'SECURE_AUTH_SALT', 'EAU021{NTGwD)]9P(W1z%*2H%bVH; #9c7?Re*QM8!iJ}y+t,T.e*5({D=*uxNof' );
define( 'LOGGED_IN_SALT',   'QR^T){$g>0Xj=D5vwo`6LVr=/)*r{SYI!&L]v.>zU#LKvpw@x<L-Z5:fX<0:eXTt' );
define( 'NONCE_SALT',       'r_gvU<}?I|Zi1V#GiiS-PY7CY)U2+tyK]t2; o ;{cxV6Hk:vVl|Wxs4!SChRdZ+' );

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
