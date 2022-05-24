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
define( 'DB_NAME', 'inception' );

/** MySQL database username */
define( 'DB_USER', 'pkari' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '3.jS5}?fqYOvdS.B:T]Uo-3oicfI&RuhT;&:)W3C7boc-./Er.4#D6v8J*$Q4k5]');
define('SECURE_AUTH_KEY',  '1:-U33@}z)TS%f7o!NO!YO.xuQv8dlZ4k-nb}Bi.Xx/KE3-<5IC5xuLWZA^pDzHd');
define('LOGGED_IN_KEY',    'aLK]1T7J+r%AuhZwAebFtOjM,7Z3<~x+7y@KT4*@m7v|Uu2:8[xy<#{}Zm*l+t&;');
define('NONCE_KEY',        'GA6]ufI[o:RI09,P8ISGhp7>;Lkbq]i5`4hsLFN9JzOqj7B{W]L2Qiz1|NVVV Z7');
define('AUTH_SALT',        '-l#Jfm-uo^L@vi}Vht|%iEy1[|hS?:oU##P@ftG!lHPqam=pDYhy0&%a89yAUW%D');
define('SECURE_AUTH_SALT', '$((+(cpNIzq`/jo1>>Lyy5-:3T)Vtt-.ckdL6o-D+g`Bvk0be(vvXZa`d+Zf&,g(');
define('LOGGED_IN_SALT',   ')geG4I@pT2||3ag3ZZ[@*bc%hyu3]Gas[C6QFqQrSNP@%A};jxcxmwfuWg_]#2ec');
define('NONCE_SALT',       '8*<@7Ek9(JgQj*-jG9Db-OlJ-+];||5{nxra6TK8#VT+`nG]XNMAEGmd&S{%~tW*');

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