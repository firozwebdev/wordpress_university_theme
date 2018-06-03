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
define('DB_NAME', 'wordpress_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[;,#lunC|Pd- ,*I4XBqH9dk_CTM,]h0}j{|kx4hWZ>p4u+5t4avm In:t(7WI.1');
define('SECURE_AUTH_KEY',  '`{(~>#c9qEuJ&f$eXXN-<v ,&8XXPF3Z^Qrcwz2uv2&H0sXw8:kLC*M ewp(&!UZ');
define('LOGGED_IN_KEY',    '.RsxVXR8i7ax08i,FswIK%mi/4X(^D9ziDziczAeJ$,6]dEXEQGBBu+K^^.ncW5b');
define('NONCE_KEY',        'wl_ew1bXK0Pl~#HXUGOK%C}!/2}X.<: lJ@VAZaYY~_6VedkKs$XkRb18Vd6S%RS');
define('AUTH_SALT',        'X;GFhLhT**K}:jPgr0bBD_c|T~RVW#}P9xWw`v=zjm/)AZxsBpNiQ9oltXL7w8wN');
define('SECURE_AUTH_SALT', '_OFrncN(*~9[vL`(oTS;Z:Ys,X^(p6^wBZ  HDl!T+ct9Kt<[pD/f-t:V]{kmJp1');
define('LOGGED_IN_SALT',   'klVO(-QHK6oXSJj6T/dq`/$`LsJM{$mztc6*Tb=F`4/Mjse+M1xRn!#^x?.S]q<s');
define('NONCE_SALT',       'i4o&zUZ#v-&3&yRb.>56>i:ySoSly}+dxC@g}othF]h.dpb&{!|d7N3hz_au|S27');

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
