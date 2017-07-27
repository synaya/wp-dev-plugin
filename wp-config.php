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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'gMH/+;O^9VIx7VG,m%K,$0>CNR%uDT@_EXhzN(^ryyG4g.@czQ^.1#~5z(PJ-b^T');
define('SECURE_AUTH_KEY',  '@%^5ZBl0^wi;;|SvsythQ8VmYbd/i^6x<O+ucF<A.hSb#f d)pqB3S #Ny,ZsH+|');
define('LOGGED_IN_KEY',    '|M{_63ZjQ;UCPCcvL]4P9fL.L!ESLC{Y`~0v<w:mgoEU2{rBmRF7WPb/0 <KMrFj');
define('NONCE_KEY',        'XCb0@y+CeM{2`&[`?9S1|HV+@_HUe-(nZ=yzzvjT^d)lB32h[C$O8>o4T~95I4+8');
define('AUTH_SALT',        'c=mh;sq!58?jK3Fq5|3@iQoSk#$tYh!6xF?!CXyN]2&XRi{Nwf{5J-t4#qI6gQzb');
define('SECURE_AUTH_SALT', 'Di12}s;*3=j[>:)t==3O3J|>B%q?yQCJ^snZ<n NTD<Nqw_ CH>4~VMjnce<XJeD');
define('LOGGED_IN_SALT',   ' Ip IUDz;G%]*cxTmuL~ ].nPVhN5yUEq=PdGQD:Bc.a^Q2=->gb6A-R(h3t:+r ');
define('NONCE_SALT',       '51wy)pgcaT,OO014uqPbJxQ[a*DF`e~dZNv>>,y@lx-j5VF(8^1D*a<WQ;`%J!.U');

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
