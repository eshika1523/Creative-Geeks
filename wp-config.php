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
define( 'DB_NAME', 'unaux_28816857_826' );

/** MySQL database username */
define( 'DB_USER', '28816857_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rp842!4[Sh' );

/** MySQL hostname */
define( 'DB_HOST', 'sql200.byetcluster.com' );

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
define( 'AUTH_KEY',         'bvetd2npmgxyyuwjs5utyo5ildjpto0wwimg9eebzohjr6mipvlglrz2dl7gd8vq' );
define( 'SECURE_AUTH_KEY',  '7r4h0tzsb7hdchcouchujcrhqunq6ph4grccuuxk3gxzzwt7goovusuo8wgyt7i9' );
define( 'LOGGED_IN_KEY',    'z871gup2rkxjtue7gvblnyn275odsjbuumgk7eeyvg52m10135570ijqn5x2vxf9' );
define( 'NONCE_KEY',        '3ee94jsyli2sjbctqbcpnxabyto82gksmf4pjzpqnzrukvats2tkjeb1k8mku3ab' );
define( 'AUTH_SALT',        'bs34sthr8h5sdflxxm74nylgdu4yse0fr1tjvo1wdq7kkucfzuc2jxnydv7rsoa5' );
define( 'SECURE_AUTH_SALT', 'qgofrf06ypzs80ctamkn1vhklharpy5iaaay2nvpuoijxkctum8pq1gse4bgwnyq' );
define( 'LOGGED_IN_SALT',   '96dig1uxlih2srt0bw8c1e91ppslwt4i99hghgdg803mlkmyablftjsbfrkcw4ba' );
define( 'NONCE_SALT',       'wwbqnghtlovfndptotmzspwpgxlkccpm3nutw5elcryikywgtipcvut2wznk0sru' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp91_';

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
