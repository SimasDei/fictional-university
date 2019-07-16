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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'FYYvcvCnTudxjnQqmBLWRJMCbpxZpnxNseUGbytdYP7DvA/7VI09ickeYBcU0+EMucJr1pbkC4s9e4OX4l2AIw==');
define('SECURE_AUTH_KEY',  'l2FQzUDGwVPdA9IwyV3tAalOSWjBaxO6JmjI+HyNtd+eUS5LpTN/PXQxLLqLD5VZ8Nbbdo5Knz/pVaSbeYPtZg==');
define('LOGGED_IN_KEY',    'lHl8C18Fb+Xdh9a8MD1beSadkIimqNuA7A0W88okPVVnPG2xhA5rqZUPl5U3w5/GZlfb3BL8S1EprNywk/ERFw==');
define('NONCE_KEY',        'Iz2pHwjb/uWbEjpPkdiyg/FBP7T3igKFMnndQIqZAPPyG6O2x/zUihDlwchaGU86Eh1UXnFTn8GN6KFg51q0XA==');
define('AUTH_SALT',        'n9wyWJ/ILn65zKDwXXV6yegrRfnmNZsw3ESf48tpGnQ65jW8eTKYmba29uMVm2mynb45mKQCd58GHTic6VZi1A==');
define('SECURE_AUTH_SALT', 'RPsIvsAZyBHTX0u+J+tq4CsiqFDeqA7M+SUkJw57P1dANNFKbi+GO8FnYk/5lxMX9OI6FYFcVRNja5acHSdsBA==');
define('LOGGED_IN_SALT',   'VXeDZjS2ZRuQ+hHV5tnFG7JHAAjpZhjFNJEGm04iZ0KlYW7nzFPckwGgG95LG/7Y0YdWLRHMU77nGJQXulX7HA==');
define('NONCE_SALT',       'FvXNdGAnk9ED328NkwR1+Cbq6VYJTnyw7BXoSlxkNu5NO6KRfhGYuRg+bpUoCxzDOcIbL+9WPSBO7yzbm1ez0w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
