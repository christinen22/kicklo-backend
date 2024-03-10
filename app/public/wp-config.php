<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '-%q4lZgK:o$7UJ-(N!Ol5nD8;zo1RkUJ*Jr,L/x/EN]mWsQkUt.P.MH[R]{4x.m:');
define('SECURE_AUTH_KEY',   '6a)#*_8SU<E<3,aczzxP@D</Bw:j{Vu8ICb2|sB1K?9Io>N!jMpU]_:62*P5r!`p');
define('LOGGED_IN_KEY',     'ffY2O<epL04ykdu~0g|Ukx HZbKD90LJm@-GZ~iL;(#e<fo^mJQJ+l=6-6dQV{QL');
define('NONCE_KEY',         '!*q&cE7;@)6<k2CoxhDL2I6PrNyu=zZDPX )M~`SCL4wb;A+{wc2Gvy@vT.}oE)C');
define('AUTH_SALT',         'iQr2(XJT.P3:9|mD?Q><c%M?-ZR,hty(38lw5h8FT|Fm>EjP]N<ZH Rgl p$Ry#|');
define('SECURE_AUTH_SALT',  '?55fqn$BGYz,h]P:C.!JOU$^tNtIW^`I9nf_G`FUlWcsjZ[L}8r}F:D8_AiK85#a');
define('LOGGED_IN_SALT',    '8hs<_`?IMqF@d3 `g1@BboRgS-VXY17g_`mO~{_:TtlyliD=*`qpQz@B3{VoXZH_');
define('NONCE_SALT',        'cQz=0J)!-d]FI3n_WJ;Q7>Jgosrp..i#WHbi g-%@nc_3h[-pT]2=OplBE_)R5ip');
define('WP_CACHE_KEY_SALT', 'H{$R)9@I?eoXrMB7<n31-k%u[5wI9o8DZ0tnrFS-ZNm_ $sDKr|{8?gXqsV_)q2$');
define('HEADLESS_MODE_CLIENT_URL', 'http://localhost:3000/');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
