<?php
define('WP_CACHE', true); // Added by WP Rocket.
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

//  Debug
define('WP_DEBUG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '7ed6a465df50d41f80d1ad80c514050136478ada281090e1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'jdQ9evL`TsWYTg8 3 2c_~qGXob*+e@:WobR43zj^{C);&D$nVHeFFcE#N-;`83]');
define('SECURE_AUTH_KEY', '~Re>8U@Vv^~@CIZYjG/zQ=+.PZ&8LYrUHD++Ye/UVo&ncu2a+tg.#h6oBBax8r?[');
define('LOGGED_IN_KEY', '0d;qMiWaPv_DSC9.narmQ)Td*cmcHmb{NcB=B(>`RO%G.DAK[Mg+JKI5L$^`7Rpd');
define('NONCE_KEY', 'puUT8U8*7PKS]*6jMQH555ICl,4= 9-6c^lRz{Z |jcR&&~]v{Gv(K`36|~17ocp');
define('AUTH_SALT', '2&hHfF;U[EA2|+Pv{p^<E3HMY3~sau0m`r#%5KH s93bP~l_S_rZ7=WP1ZD}tKG8');
define('SECURE_AUTH_SALT', '%?tG!v`j7CmC7$ii{!vwS#[2/.Y]Qc(t^nM{pJk;f0wEu.,MHS,x%/^5(g#5xr)#');
define('LOGGED_IN_SALT', 'xih6^t#(^` oItP4HG+J2_N9O*<(VAhT|k/i`jz,wF)jL9B>4(gw4n}be8`^3,(e');
define('NONCE_SALT', '|[<S(6zO,hyi=_)m7#SCT;ug#UBwQDd$>t@UK@3{jEv<a`})H>08E=sh(X%(4|jP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wO9qW_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';