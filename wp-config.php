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
define( 'DB_NAME', 'ruletheropes' );

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
define( 'AUTH_KEY',         'dQ&XHIE.>|;,=0zva5LyUiK{0=F_O`q5>/@r)HyD;$gqCG?MtG,s<Is2Lok->`Zg' );
define( 'SECURE_AUTH_KEY',  '59hPl8=~u:n(%AZHqymv2G9RopK3%N>w.]XCFh(BXuEW@R%nE$hl:3x`e~`A)eP{' );
define( 'LOGGED_IN_KEY',    'P]EP^/*1z%]<R>[+p$* 6K9f}!sHz}CBb1F@iUOCses6Oe3H)aCzbD.Sc?EHnB-B' );
define( 'NONCE_KEY',        'XT,{Jp1/5U1/>h8}J6j<RRvwz;P.]..wF.9G,x F=?rbbQ9guSAmOs1r-+0r_%pT' );
define( 'AUTH_SALT',        '~])JN43N0J.Yy1FXr$r~k$(mrRE=_(~#y7rzHjOlSF/)!m3AL>~k$FPn<08yN[&L' );
define( 'SECURE_AUTH_SALT', 'BvF]Z6&_~Nt*PWnvkRr-]Zp[-SJ#Bb-S)+T6_+^LJT6]j4gNg8`7)um@4;3)?0r_' );
define( 'LOGGED_IN_SALT',   'P7)9cEN3kfy+[b=r4Qf9|{`<#E?ziLs<GaAu2V-@}Bf1ohnB0 U[AH%;:$k_5rg,' );
define( 'NONCE_SALT',       'D:oyn%@svP84a|SzKY8D8Xn>9(d/4ztst65T,eAj&[RlxV1yq<pXyaC:I}k|S7.1' );

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
