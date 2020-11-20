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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Nv6-ksR.2+Jhs9voM3 !C_(I0eV;P7ANww569.R=,x,t*YTf-SbC#]=/9ubp;mOw' );
define( 'SECURE_AUTH_KEY',  't]s;HjRAU@NRll?adEP+SLNs56gS18o{#XEA}?Lx5m)ut^o`5(!w@-N03-oJ/E>T' );
define( 'LOGGED_IN_KEY',    'Y;Iyb.)ZLlZaRW@wDKQ_O&rtK-@[=.*6NR;-8V^Ha=^I 54qeA*)1GIuHebvhH[<' );
define( 'NONCE_KEY',        'TIaiGUZnSl<j-+uB5hfa5Trq`&5_rZLonu<?eNQ+ZLS RgVN4_1cX5lBG:arM) 8' );
define( 'AUTH_SALT',        'ia9GegPa[.Df&{rU9tg)3~#m)V{NKeA0I7iPNGNuk%v[$9}}w0%{/hE.5q4Toma+' );
define( 'SECURE_AUTH_SALT', '$MeMNuK}BpB-l59&U)mgd$*E@x3~H]%lH9-QFx-<|`+a}l}diaQde,Tl11OQrX`T' );
define( 'LOGGED_IN_SALT',   'l9Hx.Eerrx$[`k<&_0fU6<V&nZWbDY([fT79sE5FKbJBvYE8U/I]n@i,#}4<<4LQ' );
define( 'NONCE_SALT',       'V. JeR}mIE`Uk=.{I+*/G@r~qa,jTk*;JN@Tz~b%=fTf6.*HdoRgkj/-gMo>OO~{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
