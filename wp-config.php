<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q9KL[k]VUfGw_##Z/W*;QX|DJ^>*TGSVq4 7`wRu^E GEHvnbrgU&>GNGTh_ghgw');
define('SECURE_AUTH_KEY',  'KEL4j[7n@^sQZx%`oDYIs(ZBq>)&G<dTL[JKA4x[zU3}vV*AV>5tUb/k@*xn$a H');
define('LOGGED_IN_KEY',    '_YC&c71}<:SPILuIykaAc<HqP/3?qy:V7W+rl2pv:sV/^Zl%`8/eNTJIF;xkbnYO');
define('NONCE_KEY',        'AZq.LtW|lMt{]4KV`#z~>!=gfk:|2S:Xk@A&!x[<r9M4F)36%X*(~_bmA4r1*|4m');
define('AUTH_SALT',        'o cm0R/bil-H+P:}kY~(ON7!THOD^&e22ZYu-*3(oS^yH]30!j4zbF!sl2BV BA`');
define('SECURE_AUTH_SALT', 'JmTuJGeMMvn8[=v` R04%&4>v5#jq*Be@#0y;qc t+zF0h(dI;%v85ptfD]`:-%f');
define('LOGGED_IN_SALT',   '.K*Lj 4IX&$b)O5McC*URC`muH<)}Bxtj,SmaCRSq`9Z_`T7$h>[%SZq*v@wZ)|E');
define('NONCE_SALT',       ')jiky+}nI0DZ%~#6TOz)B5=W{m^Kf};3aT^K$Ea0C@daK? -:=&Eq2iaw~@3MZSe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
