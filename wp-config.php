<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define('WP_CACHE', TRUE);
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
define( 'DB_NAME', 'midweek_wpsp' );


/** MySQL database username */
define( 'DB_USER', 'midweek_wpsp' );


/** MySQL database password */
define( 'DB_PASSWORD', 'FW3?G7FnAu!Z' );


/** MySQL hostname */
define( 'DB_HOST', 'localhost' );


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
define('AUTH_KEY',         'TR[of5VGfy<t%oIQf*gfD^+whCAAM+v(+JW7tsV7:[OB>p].;4h] nW~TS_Th*E9');

define('SECURE_AUTH_KEY',  '<J~ #;a&s%C`.Yj(7G~lsl>B1c *s=(*> hCHYd[-|9TqaXOf]XJ3k#E:=n>f;GR');

define('LOGGED_IN_KEY',    ';-$K.)U!T-gGYx6@+D_35f1ej6<j`{+&kJ<Aw=K/ci-;T2xuN`^{~0[~|5+Lq2+W');

define('NONCE_KEY',        'f<yY^&[+_A3jL8/g+#AK^s+V-hF+}zCwzvF$}p#sh4Zm_fK#liJE]<DFCc-/b$%>');

define('AUTH_SALT',        '_+J|jg[[eeo1Zp:M0Uk@[g;_vZ>L/aI0Y`d_%.U;rKqT~TRnc^76$;aai};KfUT.');

define('SECURE_AUTH_SALT', 'B+_t|+1aNsQ7UpPGMI;FIM?{ahvwM]TJWN x{#e~|8z=}}[-7Y]j-c9h9V3`T&B@');

define('LOGGED_IN_SALT',   '<oUD=H[456!IYf{6bK:vLU HMCm;KSr_H5UY$b{T~[hJ_?]JjHLBw}NU=|0>T|ir');

define('NONCE_SALT',       'W>/Lu5D+als9>_4Fj845[kqEv.~b?Z b?[PxsVu2*YieSd9mq@<t;HA>:>]7<hC=');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mdwekwps_';


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

/** Custom Defines */

define('WP_SITEURL', 'http://www.midweekhiit.com/');
define('WP_HOME', 'http://www.midweekhiit.com/');
define('WP_POST_REVISIONS', 5);
define('AUTOSAVE_INTERVAL', '10');
define('EMPTY_TRASH_DAYS', 1);
define('DISALLOW_FILE_EDIT', TRUE);


/** Disable Autobackup. */
define( 'WP_AUTO_UPDATE_CORE', false );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
