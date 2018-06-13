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
define('DB_NAME', 'wplatest');

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
define('AUTH_KEY',         '6%E4%)U1&BU</`SiTNyL!<tzQ$REm`)0{oJ6(nzZ4T Kn/rFGqXF.kG+|5c7l6xb');
define('SECURE_AUTH_KEY',  'Y${OZa?Z&.K]WNm j7Tp~=TG_DE|#si|*xL]pfkdw+q;ZCtOVwkuezymyXW`3{Vf');
define('LOGGED_IN_KEY',    '9KDBSrISFyFxYtQ~DYt&U^Y+^MA2J_Nz]Q3snB4rXLYS+MI =*nv0v,*$RKX3p^B');
define('NONCE_KEY',        'ei:5kV~&5[BQxdwii/TL9pkFytq:;FfBhKgLw_Zau${}`A]^7-*P9=.?J[tUVs~I');
define('AUTH_SALT',        '*=F=n5-B3euw4B@t>GIvcDDV*5ltr3MNc3V@^+A0F&piAtK>&j1{poD=oO3?0LHy');
define('SECURE_AUTH_SALT', 'AFCAk$W,AoA*]eby^7UFa9ANHcJQxCEg]8s{,yx7UAO6QZw@luq Ks!**&cXe>~5');
define('LOGGED_IN_SALT',   'Itm@NmAnTBx|Z[p#dGo*1#4cRGYqSvUNxWYIaoO(_i~.f2=$wp|n{yom ?Ktm&X!');
define('NONCE_SALT',       '< pb/}=|c[}J*(<^MQ.G]/%.mZFMzFoA6>pBo$pf$(,J1Av4<[Iv,uv,tzP}@?0O');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
