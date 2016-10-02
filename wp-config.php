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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Cool1989!');

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
define('AUTH_KEY',         '4H8;b4etEuAXm@;EjOD&>$yRH/juEm7F.(v9Bi$VzQ|w^|mYJn>&6fG?7T4-]G<^');
define('SECURE_AUTH_KEY',  'GGu9u<HERFP~SlhnQD<kzgc%HGk4`w>tKwN-!NGy 45}D6.i$Y.UK(F44]&`2G^{');
define('LOGGED_IN_KEY',    'bEz?aMFegnPB5CB6Or!/wm,68EuOz?jX<}-Y29P@9U4Jg@b;V{S%XApnMxf>lJ|R');
define('NONCE_KEY',        'O>]b9=uR{@lD)4=,o#lTkp9fmBjHOCGXFeN)nx{;r^rp/D!&F(2XROb{1}4L2xNE');
define('AUTH_SALT',        '!mzTQq@67Lahyl&q`> ]*OCVF2T+rIP#y%]6)Mf:2>cDzTw-PP49eKs=I;%>(sLQ');
define('SECURE_AUTH_SALT', 'v{^F7_^]6GIxB,Q5=GX8O_<w_$G8+yk! osN|<mVX|!GKjQK5(N]FTOuQ*ZhN{6$');
define('LOGGED_IN_SALT',   '6$2GpiHgdhSm0gB]rvWkL]v=WX6p)TW|tG)ntSTkv,I0[Ugd[x_-,Yf29-qrS,{W');
define('NONCE_SALT',       '9MtQGsilv&pF[EU@!fvo@3j^HRUR!3.yJ^WLGFjzZs|o-Cp*KCJ$&[KZ*O]}Feo4');

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


define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
