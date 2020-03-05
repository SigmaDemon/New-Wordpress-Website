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
define( 'DB_NAME', 'newwordpress_db' );

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
define( 'AUTH_KEY',         '$.vx3-u8HYtiTIG4IDlPvnk_1oy2=[/z]bE3m~nq,A5fXZEQ#sr/487YnlkZUXz0' );
define( 'SECURE_AUTH_KEY',  ';0ixg@boHm6:A#1IFp&|o=QS9]8S?e8>D8v#k<p&_W_y?}v%~&?x&l163a|%I~1T' );
define( 'LOGGED_IN_KEY',    't]VEH,gN.JqWi1Spohc@_MX  v6Oo-i&|}1^HCyE>t)aWPlQ_yJgZ;-CvQmj$81-' );
define( 'NONCE_KEY',        '6u}6m.Ul8w/Tqd(q[w=a=]z$J!nXieFA/cfX,@o[-xcQA|I&AtMjE0,>U#E/vZv8' );
define( 'AUTH_SALT',        'j>vob8(l@9uR4:p!0disV#Ce6q0v`F.yyo+k$tUw#Q0~%`P/QW4uEybucj6$6ZKO' );
define( 'SECURE_AUTH_SALT', 'R5[zyBI1G[Z(K4g D*;E9SaX~T%r5+*@YovU(HriV> IL.{V(htKv7ZPi7pF:EB ' );
define( 'LOGGED_IN_SALT',   'J1mkDI140V@<xiV9-b9bL<?OQG_{xllzNOfnJ8v[L i`ZtU}r9hGf~c!^YKI+WGM' );
define( 'NONCE_SALT',       '.>ZM,l[EpXq{k.q]0B+HvEPBc) LV=Fn7Z%D3F9W3;Zny&zdS.J}JfG[3?6^P_CO' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
