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
define( 'DB_NAME', 'pustaka-hadi' );

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
define( 'AUTH_KEY',         ':,>D2!u^PqYSN*/iJtzlcZ+krTbb6DMD+)dwZJ]>oenBXXOqDr[_TM?~K]vg.0O=' );
define( 'SECURE_AUTH_KEY',  'jeQQ1u1qvU1e!h ;H`c>}s%DLM95~ :BDXS_B13WZgHY2Xv`N9TJ[IY/F%(T aHw' );
define( 'LOGGED_IN_KEY',    'XiDNY+jv.hd1_m1:=9xu=cFn0Ua<TFGw1:NSeSC;ar52@I//u8{%p:mqPCa_)CV/' );
define( 'NONCE_KEY',        'k! ~ZCDeTzDHQkq^=wen9_t0U`n]mQCCJJv!.4>p Xb|@?SX5l~pDoh@j4eU#I==' );
define( 'AUTH_SALT',        '.fm$STnR2/I2Nj*izY5Z_%O&Z  +:Y%;lLM`8hoi,{dhb`7ciT/ z,3 )e=r;FA^' );
define( 'SECURE_AUTH_SALT', 'EDKvh8l>}zeyunE8#@Q[? |[9l^1#u74)8_GQ;mE(|$b7YJrsUIi^iBQ@KD5Z_ &' );
define( 'LOGGED_IN_SALT',   '|ekvl.fyA{Nr7|9SKh$Zhq=`+BF3>)~}w#5]2%:VjKo`HfF63BF*o:Z/DAf_hJZu' );
define( 'NONCE_SALT',       'KM6j&y563lzZn_T&_8fw>`p&iQy[&Xj8YN&vW1}*hV#*M0zo#&sZ@mxv$UP_C$Jq' );

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
