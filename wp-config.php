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
define('REVISR_WORK_TREE', '/home/whatnote/socialcyclinglex.org/'); // Added by Revisr
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('DB_NAME', 'whatnote_wp760');

/** MySQL database username */
define('DB_USER', 'whatnote_wp760');

/** MySQL database password */
define('DB_PASSWORD', '4cpz30!S-7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mtpciejbrlrga6wma9vk3ngp8kzbkack8o1xiedx4zc0ebznajr7fbdtvvlzinmp');
define('SECURE_AUTH_KEY',  'dungsmp8afpuf1dtdcpk7bzfpp2dueiujwtklfy7hfvfszt1iu5q7p8rbc8zwitw');
define('LOGGED_IN_KEY',    'tfcsekfvtv1huyjk5ub6le6g4ltbcvogp8ec50bjkurnv4mt8ow3mb5zg7yrjynb');
define('NONCE_KEY',        '3j174earwaoyg3hqw2pokfqbx6zjedtxtaotrrjm6kanfduxmb9tyzvlz4zwjzch');
define('AUTH_SALT',        'aar2w0oefc3g30q1y9o3upjavuxoi3rxplbpwkynqrjqbcajh7enqrnt1hb8l5gk');
define('SECURE_AUTH_SALT', 'linujhdcaius9azm9pcuisugbrvsgednqwjqpnivqxpstbh15yp7dfagm4pyfcha');
define('LOGGED_IN_SALT',   'tqlsmg59mvdt6aubuogrjdmnshqk5pby225oop888v5p8djklwuzgku1mejfhkpl');
define('NONCE_SALT',       'hrsltenhekolqcyavhkj9njanfrrhhu0wghbxfqnllfvbigwwkzb6vlbxg0vahac');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp8c_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
