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
define('AUTH_KEY',         '8bWu6bpiyTdueEAg4mNF7biH9EGaP43oTBKyKJk11v6q/fc2AgPkGr732O/nkgRhlAnO7g8E4kBJPkjcj6zi0Q==');
define('SECURE_AUTH_KEY',  'Spdt6qmfizSDk3ZKE8ZIRmt5Jc25Kl61SAc5WXEaOeIcGyjeiBjsFfeOCDwgvBMZGZ+8i2HxHEz9wNxGdlJaUQ==');
define('LOGGED_IN_KEY',    't8WQCpyjIaJxGWFZZChW/1a7BUsaDtN8I5rMB12Ml3Vz1EMVdWAw5BqUMSMjsN36GcKx+4Gl9H9xn8djjVamhw==');
define('NONCE_KEY',        '7mNwyJAQ/IEwj+x+vN9Iq2WbhFkDgvwhSviLxBa/JhQAh4ctXZUecNzX+iYQryfm705PFWmWKIHenwwRSMds2Q==');
define('AUTH_SALT',        'cOY1QPULsi5f/2rWS9bvdscXfilQ9fxq1KYnXFTFP5qEwBiYEfqvla0u+mbxEWjG/kmmb6Nv22YMTnGR6Jk6UQ==');
define('SECURE_AUTH_SALT', 'xW7t4OEvOyeV3iyQSXUMst3RhyZ9SZTvUY6ba1602TCrTHP6r0TkLGVWEerr4wJc9dnQ1u+31y2JEOJ7LBBFuA==');
define('LOGGED_IN_SALT',   'F/JwcsoMND5tdt6MVi3Dox8NToR9T+mPc3tkBYWV8P/WKtiIgEF4itj78U4a6Kd1v9z0Tp7YwqUInmZzbD5lpg==');
define('NONCE_SALT',       'hqfLRJHtN3BSMUkAbPeMZuWbkRH7cdUWqha8F20oT/JbjOSmnUn9dopl4ZxwEKvatl9jeTGFLy29k+dUn/bZDA==');

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
