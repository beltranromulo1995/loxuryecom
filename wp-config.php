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
define( 'DB_NAME', 'loxury' );

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
define( 'AUTH_KEY',         'vgIu1.F7k7gMv}oy]<=.t;eM1hAt!5xR^w{/ f:Dl+E@Fk/fV!19FcG_4a@]9-.Q' );
define( 'SECURE_AUTH_KEY',  '+bHRJTlHb637VZn{@ZHIwJ,J}sxRO4&Oh*$;_7T32;;>vR?{7[u5lZaOfIR2JWS_' );
define( 'LOGGED_IN_KEY',    '2|d&kho& ps_I9$UN!,jj8lpJ^GluJ75Tx;kL4Xfg5YiVeOe~$1W6t t;#4]G$;?' );
define( 'NONCE_KEY',        'w;6oQ`C{*tUCh=?*6svr1K[p,%$>Mv+,)`]#_J>R>DD)Y|R<U#Ya~fVf;/$SZ7Qv' );
define( 'AUTH_SALT',        '%hlE+ znpBCZ.x4dc;y~rLqjv3hc?oUzF{(3by6/uy% 47qU:sEkp{zRP?mI%uyA' );
define( 'SECURE_AUTH_SALT', 'Pcdr8OzH-yxQohY]?j`_M]uYUab;iHD;45W!Jn-[4F&Jyoj:Tvry)mlw<GFp?X#y' );
define( 'LOGGED_IN_SALT',   '~<-r{sz$z*DTXPea#0P|&vM>Qc3vz%uC>NF/#)[?6xmEu6;dI/QG:QI09.c){^Rg' );
define( 'NONCE_SALT',       'zt+3$g`LdtV)DsabI<M@UW)L4=[[}5Qfh:w(3VxM;lWCQO!~H+B6^nz31Q)q9^tH' );

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
