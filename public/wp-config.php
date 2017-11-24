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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$U!J<]#JX~NI&KFpzaNX2smy;H$/k=`d{IZ:E0c<ADZAf%u)phQu6UQp]c#<;ql.');
define('SECURE_AUTH_KEY',  ';rt3#@d=O|s(z#DN~~b[nz/c>{,}(D.<di :Rit@(j{hgO(CX$b{-ux7|aXB$QDU');
define('LOGGED_IN_KEY',    '3j)rRn&$%%QB|d$$BQ/4oRR1o/tJL:_jMe#Z^V<%V9aXZFxCX(Hqy81;Pr%nJ4f=');
define('NONCE_KEY',        '+.@%qw<i1%SFb-{$-Saw7@i%wlj?>)G7^,kpFyJ~c[8I9B^=Z@;`8Q!=]}VwhCoO');
define('AUTH_SALT',        'ZhyloCv:#DO>nwpi@u4Hn1KVAJz?;6,mey=-v-Rw%/:.5uS[AkQ}HY~+`BY=xL!}');
define('SECURE_AUTH_SALT', 'Cz5%?TO|L+!8]RQjVVX#{]pv@-0b/C8r<kVi0+Cd>3=gPzsV2j?+C<dNJL9ev+b,');
define('LOGGED_IN_SALT',   '|]Va> dy)yu[!b^A;xZ10U/UxX)WL;!kFnZ+t6X%EMv8<#)<-]#P!7h$-?NL#PA1');
define('NONCE_SALT',       'J|X6<T$`N.qRd@|-b<;zmB+jz+^Um4DAP`Y}L_cs1h}fZ>~.H3:/sUdlvzY^{Tx[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
