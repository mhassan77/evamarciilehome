<?php
 // Added by WP Rocket

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'evamarci_evaedb02'); //Database Name Here

/** MySQL database username */
define('DB_USER', 'evamarci_evaeu'); //Username here, default is your cpanel username

/** MySQL database password */
define('DB_PASSWORD', 'e5wtN^lOAJ={'); //Password here, default is your cpanel password

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
define('AUTH_KEY',         'OH~Y,!h6-`/.?.icp.2lL?9URFLGWGe)fu4?i<Jk /0>c(;F~ P]X>FZKfsSj$/H');
define('SECURE_AUTH_KEY',  'r!Hsw$HRmn>u$0[&I$3u4LN+,C*b%uthyHPk6oF^I|U`R].o.ZFdCVC>1bLb8Gb>');
define('LOGGED_IN_KEY',    '&?cU*g#q:@I(C3$L^d&vg3)sX~D!Rdda`_7!--::[FF,.h!N15>%8t+4*6)}>}!E');
define('NONCE_KEY',        '$Bm5VY~a-$vt-v,V04 `0v$~?]npQsE[7<?hMQBGh{_Iv5 {AjZ.j4N8tbwZrGVj');
define('AUTH_SALT',        'T{`- SvF/MP6P?k;#MBrNF$-xP#~(Zj<}rZ&z--AaU`5Kex3R$&|a!ojwgc9@&uZ');
define('SECURE_AUTH_SALT', '}nSH,MQIWZ&E2-Sao;<9NGU!9doK(oq[-g%Zc~^x;WP%}hys7FcJ/V-6>=pU(PNG');
define('LOGGED_IN_SALT',   '_P<cN (NQquP2[{Jyh.hu<c=S41U+!oRLi@otN~])L!P7sv>@&UlrEdjW3LJzsz{');
define('NONCE_SALT',       'LKU!V`MAs67z0f/)F|dF]Gnxm,}u+|+iJ7PAwuL-y|E,o%paug70?Z4tHIB {Pdq');

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
// ini_set('log_errors','On');
// ini_set('display_errors','Off');
// ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');




@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

