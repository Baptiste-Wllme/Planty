<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'C(yeCqbqpvq3Od7*JUbRw6m=(s57ncHgSUJ%c};X+Lf&M0^b/pOM03qMT1?P/9I~' );
define( 'SECURE_AUTH_KEY',  'jp;C8AL;#>AtG+LiLc1M3$<=%1_jVGZc^m:0D7V#?aHe~o//09P[[odN4)0v_b2}' );
define( 'LOGGED_IN_KEY',    'B/YoUw1`BV6f$99QNL}}vc_T(#Ji?a0NY +9j/Eto8e{_[8~ezb?Be6$ENNG|W]1' );
define( 'NONCE_KEY',        'q]xd+ws$I!tk1l).rvxIdTk>Th0EXnr/OP}b7HWi$!^KD2@ZybUCB!,{16Q>AU(w' );
define( 'AUTH_SALT',        'GprqOnCj&awVu;Pzw8J*8)O>0jHfeIsOZox}7Deyji~GnxDzD%q_`ZQ0rRp2du{[' );
define( 'SECURE_AUTH_SALT', 'UU<}rmeoN!w@pW*KHn)pS*G_N!8Fcmre@&,v+rGw%Ii9w@)fA^;E/&@)UhXlb_=Q' );
define( 'LOGGED_IN_SALT',   '>Kx5|&kmGed45cc%lcqA(eHy8]imXHbP%apFLB_0g/:<ub[1sT*N`.b?wPaCTv%;' );
define( 'NONCE_SALT',       'G8[`[AMFqr7dWG#fsqL=?<5_z4yuvDPfhDf<TXL^dWqAf;g7[IgJd&2z56v[7zZL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
