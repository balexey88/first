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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'sE[!>%(o9x|H4YRR+2d[*&{v|rRa(~`S;=Lhh=xS.9pBiqIDc.jV3IE `x1q}o-#');
define('SECURE_AUTH_KEY',  '3G#(f7ust*w8Fx{Mz{|<TYd f;N?N:}FO*~5Mff<{cdqj%gN1lEM+!z6{v<_~Gs9');
define('LOGGED_IN_KEY',    ' ULq(!4fTpC0fE,j@g,jc.o0%oMK<C/]mLoGn^nqdnSTQ_Xg~zD-v3zoJ#;XE{]o');
define('NONCE_KEY',        'h7OVGRMP`z!w&,sS1R}ayf#HlW*e0,LQ`N;9JF*0cOS_iqz^aGW[A,2t04wDC/PS');
define('AUTH_SALT',        'D3h6zo~F8[d`7lpdHk3m3 -z{J}JJJXq]oJPc>=5Kqd_lI,M=gya49v051zsVybQ');
define('SECURE_AUTH_SALT', 'lksK3hCPIPbS@kykZM}s:%hRR/-n0}8le7l<@bIQL(J}S}SU^TU(nb9MU&[@PB-e');
define('LOGGED_IN_SALT',   'GGI`xg%QX6J7dRn=.9GYoILLU;?N,TrtVMUmFoC[s%V3jbq]P&=$H|k{aMDzwzfr');
define('NONCE_SALT',       'BtmQ!fBx}xb_)0`A}n}|u%g|bBWlLN$x3<uspBq~eN$ce8UG=,vQ)S 8i3f%xe,&');

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
