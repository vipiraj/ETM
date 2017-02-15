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
define('DB_NAME', 'voyager_wp511');

/** MySQL database username */
define('DB_USER', 'voyager_wp511');

/** MySQL database password */
define('DB_PASSWORD', '97.pS)x1q0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         't1wprgwbhohifd4kyrmlmikqzsywvgztoew1kbmoxfurrhkk2h1b4sx9bgunzm9d');
define('SECURE_AUTH_KEY',  'zur5fkf94iovuuojr1wurtwpurlccuxsm69qt2btqawcjo2ezpvsg5ss6mxwca4j');
define('LOGGED_IN_KEY',    'n1hxhidrulujwl4cnudfoodrbmr5adrebayqlqo34zclsdhr4f5lgmpsfya850dp');
define('NONCE_KEY',        '2g7aamcbadv2nt9ztckksc28dr1ixannqb71xgyx295ecotyh3mwcra28mu49n4c');
define('AUTH_SALT',        'ldcx6yix8zrum5dsh3onmrxsuelqhiynhegizbt0nt2bwg57yvg8m8qa229m8zrt');
define('SECURE_AUTH_SALT', 'oxmfvklmvswxlocr3tx4mixrrvcyejg043sb459rgctgendzwos6lmtlqiwixntn');
define('LOGGED_IN_SALT',   'tgbd4po2ro8xbyslnuhii0pyqaf350uboa1wjhkqzystarnl1du3w92fj0llnnjy');
define('NONCE_SALT',       '5vjp3xeqjj0zvfpbscqghyk4xgxoaugddx7adbsnridv4ef0c3or97j3z8bcfshq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpct_';

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
