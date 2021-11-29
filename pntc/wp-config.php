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
define( 'DB_NAME', 'pntc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' &4bp>El^OQ3_BeF.0`1IR*((~CN>n}7^:[{re`1G;KRUbbjaT;|jwy$bxF{voOe' );
define( 'SECURE_AUTH_KEY',  '2Fz4VU-MLimbiS/bA:k3+gF7Tf5.GljnE3M:v]5$/GV[~s={;3$H60Nylp|zk>6u' );
define( 'LOGGED_IN_KEY',    '[$S,?B)q4fV?Hj@h$BfcX7pjzn{`*K@21TbGkGvo^=X(R0kj.&akJcbkWw]j$z.E' );
define( 'NONCE_KEY',        'Q8i|NO@8<UvVwDRfKKGb&q*>PG8H+p*ltu!oO>;U3j5$A{>o{-p-<LkANd|U] TA' );
define( 'AUTH_SALT',        'tPEhCw).&UAT~pd&V%}wGXo[V+_YFX6Ob3x*nNGCQOfW0{#r0$nkP?Jeu43T}?v:' );
define( 'SECURE_AUTH_SALT', 'vieftz4537A,$BIu*hAl9bEiA+wR8b%I8lyUWc-&$|R11N#33?rZ R0b3k6%+0fQ' );
define( 'LOGGED_IN_SALT',   'bV7D(*p*FM(+p$0h[Z.Ty*,Ws!C-}4r_JrV/BJ {QDpsH%em7fZgn(si6yJNKZzV' );
define( 'NONCE_SALT',       'oT#L5)K=.ZiXD~{3^^ NM_c-{N9(JKK/bUH kRx}HKUUP,aUzZS%La+K^Gtu,p}$' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
