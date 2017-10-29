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
define('DB_NAME', 'misiak');

/** MySQL database username */
define('DB_USER', 'misiak');

/** MySQL database password */
define('DB_PASSWORD', '4Laesa53k');

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
define('AUTH_KEY',         '9[~k|T_N0CSc3-*9hax9d/RRy%{%-t@sJ;aOrjuY-HDk]_=*4AzEJW>$e}Ax6kIK');
define('SECURE_AUTH_KEY',  'G}}LV;NWO2PK rQ>pa}$:}ptQ@+zQ}a}g`7fGLEv^OkSD!-4V.qNNS0n:4Z9s~3j');
define('LOGGED_IN_KEY',    'WLx78f/4w)kkSMuj[|1RZ#P67_*?`D=wKmihe4g?*Ld.rE$ke-f}gS%%BSIDK`<#');
define('NONCE_KEY',        'V8f:|Awv<RrXR&TmY|PH%_lL(yp5(w%6z78D/oy&6Qp3b2^[SwYEBtZNzkhA.<ml');
define('AUTH_SALT',        'cL<|,~_*(Ujk.tIU<c2yuZ~,59f4jJ,D6>P}sNM!My;~t#<xT7oZ~z:4.5d|iP#|');
define('SECURE_AUTH_SALT', 'K|N{,7+r2Zn;l}xy4VG9B=<<39INZA},clnpkr}0?qG0h:|/r}I3`RRMu=Y%b~d^');
define('LOGGED_IN_SALT',   '.zi%$&eK|MJNP+Zb6am2q3z/#njS0]nJh7-n=>(`EY~qJ[Ya{2fkyQGc*UtS-)c}');
define('NONCE_SALT',       's/@e_iX402w(}Ta={0]X3l|-:?mWd5` 1$e)yB7)ffb-#4_V^n|@/KVlc_j&K|o%');

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
