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


define('AUTH_KEY',         'hKjkm4KTrZpI+8QlxRahTaViLy1vkFo+QJnpaASU39QEXlEsJVVNUIz2kh25bRysCx5dzTPVEI5V6zadvallwA==');
define('SECURE_AUTH_KEY',  'cIJbqci20C0x1oWUrX1TtYW5GGEkJ/huPxGI7KQvc9FIP94nO24kOm8YB30WvJX+np2Nb5HP7k6LQLYBDD/9GA==');
define('LOGGED_IN_KEY',    '1GsBqswQ258q0h72WReJAOl9sTElFAZ3ntwgzT7wXE1ipwMpA1n+KUCHENc2S/FGWHYq7nZMIYoqoMY5L72hxQ==');
define('NONCE_KEY',        'SFcXv/95goCw+YWGkLJqJI9xe4TCaad5D9CCFecf3HwEqa6OTGvjTE7efBGqEG+fMus8Frwi7X2VNkS5ayQY3A==');
define('AUTH_SALT',        'DMHKzx9nXnlGeYqz5FpyooiLaypAkzlwxTvmQQ2WH6qYHeBPubiZ0RRKGIAwrUNEUUkzbUV0sOXXtDaLG9bfPw==');
define('SECURE_AUTH_SALT', '6dUcNKfqirndGPe/M+glZlGD3IavA75WSR15KAnFRfxPe3jhaAvybNlk9e0ZK55oWecgfqmU4Qu+bM5nc9tY8A==');
define('LOGGED_IN_SALT',   'rcif7uEf1BxDeeB1QuBqyIZ8Hu/9rc+CebC4pInhXJj3cIBBk35oxtNXXdP6ZUSXNFHd+PNzrCLtlJImzMQOsw==');
define('NONCE_SALT',       'nc2eZlK5diA+i98GElyxA1tm/zCDE4E4zLg3oNEjiJv1V7rRstVZGWxUcIcm64ZDfm8HZsnxTEZzT6P+XgS6EQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
