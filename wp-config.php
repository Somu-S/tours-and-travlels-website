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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dreamlight' );

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
define( 'AUTH_KEY',         '<J>w/J3{?7%#m)h/3fs4,{b[;M4x;t@te_s|$#2 U8~ah~2A_Q5&,t!+WUX@pU?{' );
define( 'SECURE_AUTH_KEY',  ' 2|Od&,uSF1DbI yUWsmTv83mDQ]{+^U{r4]r;ir7c`K9xDBUAC(>B[3ah$.?R.9' );
define( 'LOGGED_IN_KEY',    'bXAt>f$j=eY?3(AKXe9HT2`x.f{N1*Z&PV1x=dK$!lNGRh8so<oELtSZ^kS7_bg5' );
define( 'NONCE_KEY',        '>jUIer=h66TK=vc#:[N*:1nQJ 3VsEhv]H9@1I;&A=Cw;AC8pQ!JN=;l@?A(R]Jn' );
define( 'AUTH_SALT',        ';O@*isC*CD]k~oIQB$9Uo]i^RzKt-&Z%-l$VE1De0!m_eX7)0XL%@8,OcHJq^rpA' );
define( 'SECURE_AUTH_SALT', 'BDh/G00,Td2Y7ZUCS*Xz[E(N*nFBoQ6XA$oH!)QogtWKo sU!5t[8VJHe}c/IV;h' );
define( 'LOGGED_IN_SALT',   'MkX8duYJ45H?b9`zR~jgF(3w9TuI6FBr_^+`?,+`oY fiG}.cr @zBu)|FQawb/v' );
define( 'NONCE_SALT',       'Q:e`yrb%)H>[~(hIPEx.8?11;NLSng?KE]!OQX_pl+^Ac%*5Iu(S[DXh5F./u|+C' );

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
