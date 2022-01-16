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
define('AUTH_KEY',         '7fEHJ5Pyw6AmjH+BpXUcuxtgyqHYw3Ulq6wAMAXAIkgF54peaUPD33U99T8uou3U3kCSAs+G3zL7++IUhT12pQ==');
define('SECURE_AUTH_KEY',  'Hr3yi1yO8Vg2rb/VSZ1Ip8eL7cllNgXbaB0KIlo2zhqQGk8/IVoLXFvHIJ9r9tFnO8kiF44UB9Cnl+oD4Uidpg==');
define('LOGGED_IN_KEY',    'x0kgTulj/h8EinAgUJYEgKJiuWH99JoNcbiDXpZWPtdNwxOyOdPMYUWcnqe7xS1QIwzWY4ts32SRYVSVr5XGDg==');
define('NONCE_KEY',        '9Ypa49m56WBGm4/I2ZQArUbhiNACZi4J2LjfxVW84JMt/cNjh3QS124sXJILFN/sOGENyzgdcd8zGF4XZTOYeg==');
define('AUTH_SALT',        'kYQLg0O44/5GkOtqEu/Rhs3K44QJPcOGDhiY8d5mGoafKw+yanDEqHytvgCwHHoz6nuRo7TYumz4T2PlPwDPrA==');
define('SECURE_AUTH_SALT', '2Dc7r+Q4K+ufJB7OexDgpiwbj0dGacZH4r62ZPLlbZz+6YjGl8ScBxiMDyJ7IgZPgdH0ryya91EDDjfqtRN/QA==');
define('LOGGED_IN_SALT',   'c8ra/5rCEMbNTskeDnskAyY91aA+91I8btVsJMntWgW0OWJnozs175JAB8lw4VkAM5HFed+wwKwdmbbOpu4IOg==');
define('NONCE_SALT',       'qOxB8ePQByXL51IYz4wQ9a3Cugd5ldLOF3XpyyzvvcsjTlvzF7gtnF4jACv85RRQTWxGnz65KTtJz2sm4Ie14A==');

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
