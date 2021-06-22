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
define('AUTH_KEY',         'yt9amt3ee05hxV5p49HOluffLpfNaBDJGOcSETrxWy8d4CrPj6gTSFBmkfENqIiORBzJQOL2rN1ghuTCU18Ilw==');
define('SECURE_AUTH_KEY',  'w5uYlNCAsReAQ88ACESa6CP0biyGtuIf5UU6FVNDY5uMsnuZah2V5a/221gUksQga4/74vHjIlHpOCoVXopuUg==');
define('LOGGED_IN_KEY',    'Hi0rxAWDvdBsflNjgADAC5ft5rLkLG3s9HCMMTkjRFQjwakvJk4jLK9uKKbb7VV5btv8s5N83N8XVfSCEh6f3A==');
define('NONCE_KEY',        'JBzMQKAEDufOO+fCWmBuyYiPdZgdRRB3EDaDP+3JR+bkQgkJ4g+i+HaV3t1xKWhEPKtCMKhapLVcMs7lK9cQJg==');
define('AUTH_SALT',        'TedMve27A77W/DtyHj62SSQmfGd6tIjQOvG/5blpvPJAMiD9cMQT7Lh2PBRl++lJ43aL6kFOhSXRKU+T8Pa/EA==');
define('SECURE_AUTH_SALT', 'a/Ytu9O3uEEPh8HgGtijJ5QwdkWaGkdTLAtPk7O8LzhLJ99VoQIQtlZlJLUhjn2+VrxYwvOt/NymjJ2+hfYNZg==');
define('LOGGED_IN_SALT',   'H51evVVq8Kv2WBK6s3YQDazSkqHpv9mwv9Wj7JRKGJfbfbbpRauQBCc8cPeO7mg6x+m1PIyCOaVooe8JBXXz/Q==');
define('NONCE_SALT',       'b8P8fDBhVO7Scqu33Nl8kqJeKG73Dt0Y8RPBFY6s9VZA7BTUtF/Q7Iz9xH32C2o0MKKlru24sFB8Zl0KzX+5VA==');

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
