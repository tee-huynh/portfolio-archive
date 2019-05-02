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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'n7yp|U,GT$d4%VStZ0 ](,L6d`Om_&BRp:e*SX[DZx=[VHDcnHg[kOBQ(0lS#58[');
define('SECURE_AUTH_KEY',  'PDKmV^>[,-]y:Yq5q,6oNC^T9<K]7OsBAB>{mL3&&s0M2Y!LJlV>Tbt&kaoayHO9');
define('LOGGED_IN_KEY',    '7IFIO[X&]=DN&O[pMy%.{KXDhE+$cNRyj >sceO)=1n|orO4GjKWMqy8kr|Nqn}Q');
define('NONCE_KEY',        'DsEk9o`H-0ytQ@Y1PS(#2iqvAP#dK6uh]54%y!c4Zhik0zY ddHq%F_?q{WpA~y#');
define('AUTH_SALT',        'SM_xSKHG`am<rkrY+M7XmSDQO2kM<qY[t3&dD~@Xq^9_<axlM+%@QlE_kZ3db>i7');
define('SECURE_AUTH_SALT', 'Sg9%HmcB:|9d=(6|BF*otAKuAvs;N^jQd<W+eZ8H.DvAh[ 0gLSAJJeSq=]b:~=D');
define('LOGGED_IN_SALT',   '777H0$aVk49qcY|WmtT#W /qiyk&/=@fk-68r%=OwPZ(cEd=z;))%G~S_d{E]h-8');
define('NONCE_SALT',       'nj3=QfY<Ugla]65!hs wsong.hF6*%JSIBWl[m6${C&Y<E*_$EfRN59J#5 qP8Pu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
