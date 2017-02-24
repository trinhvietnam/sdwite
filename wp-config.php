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
define('WP_HOME','http://localhost/sd');
define('WP_SITEURL','http://localhost/sd');
 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
/**define('DB_PASSWORD', '');*/
define('DB_PASSWORD', 'passwordSandinh');*/
/** MySQL hostname */
define('DB_HOST', '45.76.213.217');
/**define('DB_HOST', 'localhost');*/

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
define('AUTH_KEY',         'wm|*zOB--=Qa&ew9Sk:0bGw/L;gB=-| Kw~.*5+SgIo9.OK;_876Uq@(D4#M-oX@');
define('SECURE_AUTH_KEY',  'B N+.(h;wvj%7x&O0{5Q!>QoYRC(*;s(wW%}6Rw0f(HdD?f0A(A!m`[K<+zRb$)^');
define('LOGGED_IN_KEY',    'W7ay>))b]NwD9$I^C*U,af/C}AMoi|mgP%Misv>9&0Y$O,t=`i4w43TW`$cF_X*C');
define('NONCE_KEY',        '^t#6r}+/xzOeU5;pT.vyk SFK*GlWxk$_XG1=] GYp8tB*(fKl6E`0%A>i$_mO#K');
define('AUTH_SALT',        '~JRvH9+}Y6abq7Lr/FNS|F}YGs[Mv[u3Bscv3usZwilsb9d39u NIjcGgJ{Nd]pD');
define('SECURE_AUTH_SALT', 'LUS]S`#_IHO!?GE=e$RB`i.x&z44[**Pq:J_U-#Ocn}4t:2t~}L1mx7zEdO!rS>R');
define('LOGGED_IN_SALT',   'Ecj/<O09;@kgDX6~jWb)1=a-N6U>2o=h]sL-uzhRE5,/I7:~Nv8JkXiySV:N.+[0');
define('NONCE_SALT',       'W72Er&k)&KZ]L>pJrdLc_}<hDF$k)]c/*tiN&PGk6k]_$%9G|hR1ds;dX#){K^NU');

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
