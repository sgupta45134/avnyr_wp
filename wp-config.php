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
define( 'DB_NAME', 'dsingh_wp' );

/** MySQL database username */
define( 'DB_USER', 'dsingh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'phpmyadmin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|!bz2pPL5?V PIiY_5L74XEWrX7tOusmSqEw/XZkOAu>CS@HAb~w2~mDJowz0{Dv' );
define( 'SECURE_AUTH_KEY',  '$uIbc7j+cS{D|7|l#Raca4k4+KG!`?<AkG.Ax%xX:MW^HSt;0;HinMp0QG1|ML)m' );
define( 'LOGGED_IN_KEY',    ',z?YNDxxh A+dm!+qrOV*.xCvPwI9aC]&;J;{9P!c5Hc>v~g0O<RxBjn)$2iOY/|' );
define( 'NONCE_KEY',        'sDF)`,kMt45@Aj)?_j%o:NblEr,Tl7eW~g)$fK#LiV@(3Of6pt!|-]g+C:CcC|nv' );
define( 'AUTH_SALT',        'm=-}t,y!/[*fVb_RK.a*pcK()m4<-b?FsYm00+xMti=%05Js=F4XAQcgv0;-xl,Z' );
define( 'SECURE_AUTH_SALT', 'vQqjH$(Av4Cm-TyEX-7WXD5<sk)tOH;Tx)[L1cyX<9uQj_,i(YSP(wZZ%/#Me}`[' );
define( 'LOGGED_IN_SALT',   'tr[?wKu..uk>)=w!|h3v*:8Nle=[J&(#BZM&U{q/_dB-A5o(yB*3n<BcyQbN}av+' );
define( 'NONCE_SALT',       'u2k 4.:5mIrsAWe;:q6EBYyxm=_LGEV]&mf$52pNf#e9vBMQkP{Q5XP~tdJ4/9?P' );

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
