<?php
define('DB_NAME', 'wordpress_capistrano_boilerplate');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'put your unique phrase here');
 define('SECURE_AUTH_KEY',  'put your unique phrase here');
 define('LOGGED_IN_KEY',    'put your unique phrase here');
 define('NONCE_KEY',        'put your unique phrase here');
 define('AUTH_SALT',        'put your unique phrase here');
 define('SECURE_AUTH_SALT', 'put your unique phrase here');
 define('LOGGED_IN_SALT',   'put your unique phrase here');
 define('NONCE_SALT',       'put your unique phrase here');

define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
@ini_set( 'log_errors', true );
@ini_set('display_errors', false);