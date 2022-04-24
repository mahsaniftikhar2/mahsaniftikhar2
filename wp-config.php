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
define( 'DB_NAME', 'techbug1_wp521' );

/** Database username */
define( 'DB_USER', 'techbug1_wp521' );

/** Database password */
define( 'DB_PASSWORD', 'py[JS324!g' );

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
define( 'AUTH_KEY',         '1ig547eelqzmxff2opu4nbazokbxsg16lden0hacijmcrzpx47cpghkzrbauqxwn' );
define( 'SECURE_AUTH_KEY',  'a9jxbjz5onzsnnsitov6psmaudm8wjyzvqtyxfpziapknqykn5w37zmxaxylbihe' );
define( 'LOGGED_IN_KEY',    '1uyz6bg0ksxe516fo7zjbbhgg7tucteo374u1h7a35iswarhvdxcivzk3ylbnmg0' );
define( 'NONCE_KEY',        'tbpxcbnptn5enuhr8ohxvyv1huuhgvqjnfodxlb0gv88nlhmakz7jthb5uoclm4q' );
define( 'AUTH_SALT',        'torrnjpjpjukpfqszj4towf8j9rybdxu89jugsfwpeqlgrxgd6wkjpcbst1t2wa3' );
define( 'SECURE_AUTH_SALT', 'g3istff8oha8pxj3yqavrfzhhnbjv2yjtuyenczxcveqgao3xetufkq55kv8wzav' );
define( 'LOGGED_IN_SALT',   'tqcvmfgrzhxmpsidg8rmtj3h2oiknuoemusbisrm3kmmxmpgkx4q4vpqedlqgjzf' );
define( 'NONCE_SALT',       'alfgvxjdctjl5pxxgwltllhbftjzha2lxruh4igtcsfuiwpckpeowsdzw8sls018' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6n_';

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
