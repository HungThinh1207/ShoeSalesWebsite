<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecom_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12072002' );

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
define( 'AUTH_KEY',         'iE-Lo#W`yB~)V(fLns*#gTr!6_G!Y|Mq2|bCeE&DN lm+pMQCu(M2q#Q|]QQQW>:' );
define( 'SECURE_AUTH_KEY',  '%~Pw@c#]DrdxnDOG}mfeS^Iq>:#eGwX8HhH<DKPn!Kl3mZdnk5S%/=*<3{LCWU;:' );
define( 'LOGGED_IN_KEY',    'eO@==*PCwgpDWex:e}waRD^G~M`v]wR6}@8QXXPkzW -5X48Z6uhFl$]O+A7^ Lb' );
define( 'NONCE_KEY',        'dW+Ui&a;@>QWh{U%G#{+kjte)j&lG5~.[]bE$ NrWTL0IPz,*IGY?HI!DVc`kUFC' );
define( 'AUTH_SALT',        'DP HX-OT18VNczFa<AxJ.~Q$7t%XY+|%*n1ga9N.1)J^Dh?W6a01^<Ti`B!}TS(,' );
define( 'SECURE_AUTH_SALT', '+Y{nFie_C~-[1~11}X.d;P*1/_sLXy|z8,,;!U5nPd(2a<Z|+n}B+w`q.j5]x*bz' );
define( 'LOGGED_IN_SALT',   'M8K`<.$0KP;PBv]+stnmB4j7n$!wK_tYg)%Q&OA`_!OXbx^ImIEF_2l7Dg)OAd%{' );
define( 'NONCE_SALT',       'pZMxHh&l4O[J4[hXh6pi{EI{KuN9,sWl+x wStjg;$LU6/$X2, 2<@kg.0yo&neQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
