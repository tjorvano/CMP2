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
define('DB_NAME', 'jupiler');

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
define('AUTH_KEY',         'Tt3t0&*m5vrUqod69E&A$lS/iQh*):uV,i BN_y]Kvv:OI/`ZY>Er^SX/ohKC_*M');
define('SECURE_AUTH_KEY',  '/axSr]?O|T=+%Fh:/+6V4a#`N<*[M$cIOWrcf:uJ]{oe0}6Na/0)s%6$QGJ`!3-n');
define('LOGGED_IN_KEY',    ';~2a& `.|$KGu]raw<@fl^&HP~}X(Fsamj;g.ETtH`zy,/9L[@n;QD*-P-n7G{ *');
define('NONCE_KEY',        'K0JJ(p6,@aU(eMwvc<o] /WZ(^Hi1w?xr]LUAGkgtR8O70L*L3y%<1J[7Mz?rlWl');
define('AUTH_SALT',        'a~[9L/gQ5?X2bde5G_W, 4f-V,-$O7%m[DXiZ5`/s-+Ecd3>5&GF`/1icSO=gpj*');
define('SECURE_AUTH_SALT', '(in_&bp@7S_u.mG?K<&YXEwij]W_]c|myl]w+Ih<@UYv7m4$4Ko4`ZNG:?z[WyF[');
define('LOGGED_IN_SALT',   ':uwk._Q-#.WR$G v+eh |{/V/|2}g-lk`gA/f.78V-}Q2$FIc +^n<ExIP@HAC:S');
define('NONCE_SALT',       '?1.%)lprZr1?m;a%|Z4?[?xOhUdyhreOUN{ CRfn76mgfB&jl9rZdxt}YLRK-!=`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_root';

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
