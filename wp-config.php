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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3yJRIIEbSwIvfccnkoqbGYRhxxXDaZ/V/HtoDobvJ4JQRTDcfrdlDzGFInK5DdubhTiWZmdzEV61WOX9n1kTpg==');
define('SECURE_AUTH_KEY',  '8tAYsWCx8KdPTW+xIdkG9JsPqNgSFSNfjyc6MnSD7Vg8FM4IrfMmyPlOGlEQQ7X7GVq3TQbbUnUa3pfJPQ+Q+A==');
define('LOGGED_IN_KEY',    'SCaPRdWGylMk/EAEHgoratVPKAJkQpo2HBFM/WMrvTLv5BAL9sjj/VNnpUv0D2V7RFGJt+EjDqZ1dMlLyZPV4Q==');
define('NONCE_KEY',        'DBXZstw6GmoJsOB17aLsCU2GVBVHFJ3ZbI+hbO5uJKS8MrJVSMF/j7wk65g5Pa7oUxFTssROuVaBVivrnhm4Pg==');
define('AUTH_SALT',        'zcXdz5NnR9hnrgtIeY7Cg0g0wH6bjtOlJY0RYrpo2vbrAvfzFxcMOTFjVJBl6hGOTLZSgdUBP8HthMJ+T7SG8Q==');
define('SECURE_AUTH_SALT', 'mlsrB/zOAS4XWIrXKOznXAvtOROb4lf3BvJk6bnXxqyNXLOpZr9e2vJWNkf7n/wP8X+yktFbvwIWuMBMhvBdLg==');
define('LOGGED_IN_SALT',   'nEEokO+7Yh4ke6hJJiGYMRwEzAngB9snHeuDWfnVAN87p3pv1lh+xf0AA4pAYpVqZXEujdrT57Zf26gIai2bjQ==');
define('NONCE_SALT',       'F3haSFFgiob2ATXfJZ3vYoEdSaNeMV87+puB4gJQ306aXl6QL7H6pK5VJsFwTv0/Ji08ycvcg2bVKL5q8Uw13w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
