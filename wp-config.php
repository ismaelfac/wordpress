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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '17v{~)2D@;Ee@+f!L,c3)_S5e&d~Le4O7Ac6d6OHB%hZ|5lL6 ~yy.f>2C^Hb+)e' );
define( 'SECURE_AUTH_KEY',  'gqp~7cDfYX#O54wxHFGih[BV2 ,VGUr^SgJ*vJ9umFB#4xL1x~<)_}n!NsT@Ax&]' );
define( 'LOGGED_IN_KEY',    '|9U1C(xLyoq@~[jG1>.Zsbr+P5n=VuPuUHGaVqeY#tdX7[nfw~}o.mQTi>h#CMi&' );
define( 'NONCE_KEY',        '%H<v?T]&Qd,r5u|>Y_,o,C%P:}4tJ`EhZ(?BM{x7U9wOH*nQcDgxK&TdKi{d.BN*' );
define( 'AUTH_SALT',        'xq?I2%`*Q[ |x+8$5Rbjs~64BB0ko&7Lty*xec}U{K)Gv?V2U%9Xs]z>b|.nb0dg' );
define( 'SECURE_AUTH_SALT', '9^;kWFhaMFaa&!U^!kw8z.paig!Rp/%f;;p7o8q1&?7VXzOV 3:xaS?S (l*lUXr' );
define( 'LOGGED_IN_SALT',   'pZ- &T]A@6B]syrXF89#~7Oy:$F1yx$I~SGuY}ui^ y?`k/(3/f ,L=zm:|4CZXo' );
define( 'NONCE_SALT',       'y6{p|<6SB;9y}p+$$a@R4/buA<_5]XUo^o_aPR-JfEjyS)GXSEcn$R,~ l(NLbM6' );

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
