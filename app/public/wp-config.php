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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'oARVvLqqjqNLHyLpqEoI41WlFy25q8t6IOQbAEN3ZsnM9JsLMD32Eu2LtXMT097f6jzeS28D/NOpqmt/UvDYAg==');
define('SECURE_AUTH_KEY',  'J8uzD2lkCvMTiHJKCNbb4OCNOj+2b+wW4ar2iww6Myq6Pr03wshevN0j7W4kvneDVrmRXDhiOw1GVBNr0vmxwA==');
define('LOGGED_IN_KEY',    'bPUZyswvtpxYzxyoTyTP/r9nT84aeA5WB45u8JlZeH8o/x7OeE/kuDvwNZoh7xx1ao6N24oL/weQhXtkxhYLSQ==');
define('NONCE_KEY',        '0UOWpa1FzHEYUPdeuyDfU9Myo3L7XrbnL2voAt9V0dTvq7RQfUvVgt/2vAF4xUiK3fhfKBbTHsBFXQFQrxTe3A==');
define('AUTH_SALT',        'E2PV0kDQj08cwCC4wPWSiCquhNwNp7wPj0bLxC2zZKNQLMBTFv7Ox9Nnf3zxO686i25fMwNqmR7ZarOzM+qykg==');
define('SECURE_AUTH_SALT', 'Cf7TqVEB4+WSbljRswdhm985HBzbAJBjlQbfOHkSB9o0p+CH9LZCwbN611Wj8+M0a0icHyTCvOzUIk3TEFIitQ==');
define('LOGGED_IN_SALT',   'fibegW4HOPA/Nhv1yOgSb11J2F7k8572KNNM6Lmwg+kdx72trCCaa9evUOfTkigy6BjtRUre6Mq1HOn2YfrZWw==');
define('NONCE_SALT',       'zyCwECLPUnqEI97Pmd0ypMGX97Om6b+qe2Xdm0Ft6IrB7ubIxaaF63JfFtOjrHRNYOZ1eqlDvF9jr2TBXeVXCw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
