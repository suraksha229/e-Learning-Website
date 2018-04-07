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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'admin');

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
define('AUTH_KEY',         '=$Ep*%hQxnW/|vezz@]Kuw>9/BLV_3IBGw:NT^8df]M~f.Sux`NYa!H8zXs V,-Q');
define('SECURE_AUTH_KEY',  'n5@0@1FYVyk@4B*Ita$Kp.`?oU%-FOAM!UK{MK4kA q <Q]Onh#wa[=b<*A^{4d}');
define('LOGGED_IN_KEY',    'b8m6^q=f4Dow>n;091;,j:sKB+l;(+C3oyVid}T% ]tm&#_C,t%5K=MKU|PZ1_^~');
define('NONCE_KEY',        'UqFGU<C{c}m3DFuQ7C/V~#gdoqlnm/EW?T0uA^C*x;.@g~e;m$_jO-H+aOfgSyYy');
define('AUTH_SALT',        'yBlE)SS)X-hBEgh{`vb;,JKS/L.oAQRw%}t#Z,D}I:7b-2dH)Sy-Ks6891x Vv}!');
define('SECURE_AUTH_SALT', '^ zI4!uC0E7h}A{&;irkunA~a$t,TR?_fnmOB/;6.QkAJ[^d>GiNw_ZcX?K;b8MP');
define('LOGGED_IN_SALT',   '}.s)m9~$]IT]T#k>8*`3q>6.^ga9|tJ=t-cuJ3y,i$Kk I8&=1AJ5`>4BC/#fzD-');
define('NONCE_SALT',       '7yvWTPev?nmj1ro$x%5CKCW<65$G?x+VU2vl:4O#8H. yRRD8Sf/X$+UX8i42Nz|');

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
