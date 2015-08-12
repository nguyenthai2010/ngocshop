<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ngocshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '=+_W`!ePg<I5@gqa1IBiY+{x}=]|&$/al3]qZAs=+K_]qa9:),!oHvY[|%yi-^bF');
define('SECURE_AUTH_KEY',  ':+NfVtN^sd7HK_%b5AH0c:XO7ZfwUlMKW(KFw|m[[`|NQ?J:x?:0-|bFC)#_n<M%');
define('LOGGED_IN_KEY',    'bvUSt%?-$d /l#.[f5,GJU}-/:iaKB=+zg+i~CA/ex{/R])c|Ya/]B@rF{{<#Zow');
define('NONCE_KEY',        'OL8ddX3Nq#HK{427`OB-B*{V{#K+EI8af-/Fb?+93b5W|.&3BGv@cm|tW1@Y1X+2');
define('AUTH_SALT',        'ou:;RNMQ(2n[+/cS}VrJZY+L_jMp;7] ^}i+N?g0ZgOD7^j (`a0J#<14|&N0MBY');
define('SECURE_AUTH_SALT', '1^=|x76K+^1Xd,/E{g]?u=~y%(}.-Ge+Z~7~L.Ji`/:*<yZ_)4QYXq:>aw$OsE]d');
define('LOGGED_IN_SALT',   'owqxbPwv*rh+EdzP[@{mHkbguO5n_W@3c$Cl(^FNPtt-!]5-+R+tAbE:sB*p-cCH');
define('NONCE_SALT',       'gGADks<WDyxdcxCEx&l*3Vd^B=?|vwQA2,*e]e9rAPEA9c3!~Rf@k|q]S-Y&?rVR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
