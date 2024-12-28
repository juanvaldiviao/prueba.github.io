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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'D|R<Z|hMiyRWB,^(4JB)A RAJ`*l,YtsW%`ye!D%SkiWMH.bwbdSZ4{#n9d~Rv8E' );
define( 'SECURE_AUTH_KEY',   '4jZPsj4jZ7=gax_s_1TUAaE]CA>x@&CR %rgIIeuyEZMmy0ctqKH=;gr<I(bG0i,' );
define( 'LOGGED_IN_KEY',     '&E;;I1UK-KinXya[6}pg2G4w!r:NSTP2+jK`F~;iDaJfc=D=;Uc~~YDUq>,OueHM' );
define( 'NONCE_KEY',         '#y{`MBCu?)YmEAej,p2CEeoLrGnD$!5m5q5 |jM7M8- A?QW ~Ml.S$K!32&Bf;<' );
define( 'AUTH_SALT',         '5coR[j{:_p3Sa4VU:eo2{to1-Vfbou+s(B[V`5VZl^eqL6#WO=*a$Sd`t8E?iftX' );
define( 'SECURE_AUTH_SALT',  's3u_uw&gbqvn+OFb2r!D>F|F/c<*jA%iM)8h~!fV{AY!Cv{L_mv#Bi/0VK+S:W&A' );
define( 'LOGGED_IN_SALT',    'duE|fV|mcx]xu=i3]<i^ZgbG:FwE-M-U-q9ITYq^[*aNr?o_xHz%j/V&h2/h0FM9' );
define( 'NONCE_SALT',        '=pmzKARX[Tnw=^@zVS!s2>gnwVv|8an2NaiS492hwD?` kk-SlfCLu!MT~J]xqbd' );
define( 'WP_CACHE_KEY_SALT', '#QcKtM[E0&!9HgLi*+$]z]=I+lV-HjPZFLO/AZcDHebU281ybHd(imy3ezw`45ri' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
