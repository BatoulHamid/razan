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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'razan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Bmw9Kjsb2D9f_lK' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ' #O9X37y4,9erXIj]M>u@R~&iat?/BGgW5..3|GVQ6s4Qri/ec/-,(S%gPN<uf1S' );
define( 'SECURE_AUTH_KEY',  'E^ht_==t[?o3c%W[<QWT-i_s5oSZ_&MH$+Rfpvw#Z>|<:+6_rr^_tU-Woy] dy!$' );
define( 'LOGGED_IN_KEY',    '%ev<450A[]!Xv^v6xW{s}3*IkF?wt$p97&^.A!#PIZ>)P1Qx?o}j.>@w,R~K4)&G' );
define( 'NONCE_KEY',        '%Ej{OoDTgXvvu2%W:h=Es.|$iGJeg~9*ZpWW(H&4OoO.^Y}O7qy`Yp|,Fl~c(W/D' );
define( 'AUTH_SALT',        'r{F`{0L$G{ok{{(/h=Nbx4HZ_KN9@@|M<^5@^|>x]{7SNqWM<(R(p/OJy?C@ebY=' );
define( 'SECURE_AUTH_SALT', ';ARxwk7^X&{^3cwDp{Bq2*Y=PE-B5W9)3D3FM6BeqH<aH.%M5~;a-Kp|C6KURnBh' );
define( 'LOGGED_IN_SALT',   '{}Q8u5bkxDx_,LxNxFH.Yx+SM y-]0Sc|b}|NAJi<}B&AL4<sfe6)$eU  +RdE#_' );
define( 'NONCE_SALT',       'L3akv*0y:sEI%1VjEC0l8wMQ7(@RIP=@:avI+ZTt/C2WfCC*VX?1+|ZXq*g@Lqm!' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
