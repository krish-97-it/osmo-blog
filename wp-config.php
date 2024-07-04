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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'osmoblog' );

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
define( 'AUTH_KEY',         'Wp`1sgAe%EZ-B82>M0^)#*dG,hj/d$1[a>4jU0>;5;Hp9;P+oRk0cdTC4-9_teOI' );
define( 'SECURE_AUTH_KEY',  'dK9>Mz)v=K{ff?,W6*<+J]U*[u2Rsqta{Vc,ef_Wn~ik]7^>gc%1=8JGh[;4<&6)' );
define( 'LOGGED_IN_KEY',    'J(}>hYgMW{ihb,&s|Q`;ZlV`@lZmdzC&.8EBRV]tiomgEWtA^.{6nq(D>t8R7|G>' );
define( 'NONCE_KEY',        'Sls-iqP)}Ophb=m%hX pmm96*@s 0ZBJ6Hgd7Mc~MWMZ%r!Tvf~@I=(V{%W776,p' );
define( 'AUTH_SALT',        '068o&=|`Y$ydphIu.*tK%_AcF^B=ibc3PG^WANmK.t!Xgju$jkP+I&jU;KZosGC1' );
define( 'SECURE_AUTH_SALT', 'bF}[!PH~-hzY>yN@O|YJ^qy+to?,vwn0}p2z9Z(B>t:dKNiXl=Hu6o;mGs)2:%8U' );
define( 'LOGGED_IN_SALT',   'yxZ3Ue%LoQpq{i &Jf{I^ac4#+c)R@YlWM~Y*hE`~_7C_,-7(mlG+JFq8]&u!AXB' );
define( 'NONCE_SALT',       '%<MGmCB;w&?=c(DcE:m0OM,oG[MGk@DliB*rr ]0CHTvJ^Ko*7c|)w+G7eL? _PY' );

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


define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
