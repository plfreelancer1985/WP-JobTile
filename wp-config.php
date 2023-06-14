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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'DISALLOW_FILE_EDIT', true );

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
define( 'AUTH_KEY',         'lAO$U47X|OM0O+9M[pp#&RVW.X[?xuJMK3&22P0Vc|h_:UL@ q[Fb0E6E_hkPy-k' );
define( 'SECURE_AUTH_KEY',  't{)+h@W6{O}ck?ZHMCVW_oA=*apB(<DQ/)RZNq|z[nL[.d.{/tKIQ;HsF;}kRWX5' );
define( 'LOGGED_IN_KEY',    'h7&0CkiOu @;[P!%flFNoYp#Q1HmjV;erwhb.VfB8*)W0pa6i;L65eVYuN@d]JZc' );
define( 'NONCE_KEY',        '8NO5@/gjBTPO?%l0=?%esbK}rCw3u{o3`)#SpD4*Sqh&*e?4}o{FKfvS1S{74WF:' );
define( 'AUTH_SALT',        '2&1AQ/TPE1X,5F:wTYo#,rr Zr{.>T0T]}>{VUYgsQ/9E1M2#${)Q+Lw%KEBvPS9' );
define( 'SECURE_AUTH_SALT', 'jawxx=N2E/;of,hE-&9sYG/NL*Q%riojL==hq,KmNeJmi|zO3z]veNYO+]H#ApH{' );
define( 'LOGGED_IN_SALT',   ' f)-lm(g%03)O/5<xM,/h#`0qX9qE(mn1/@]E5~%El>~`NH(5ZoT7{0jM^5mI}7l' );
define( 'NONCE_SALT',       'h)`eN L}BUcoM!:xFU_|G~()2&oeL:>jhTD(S5K59y ,BeV7(p|RjBg<ojc#]FK!' );

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
