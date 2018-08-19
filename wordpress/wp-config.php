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
define('DB_NAME', 'iv_design_net');

/** MySQL database username */
define('DB_USER', 'ivdesignnet');

/** MySQL database password */
define('DB_PASSWORD', 'GtEANnVP');

/** MySQL hostname */
define('DB_HOST', 'mysql.iv-design.net');

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
define('AUTH_KEY',         '`V;(ij345SVrZMPALLksuY2cm3i!5Gc@&aUARRiM)RbHH1G~mmt)whKrU`MT!Jc1');
define('SECURE_AUTH_KEY',  'T9~0%?y(WDUx%r"sqA`&UMLDt(zn1@mIjx&p!BHJM`xZAWq`(N$7j8`(~/:6E:wv');
define('LOGGED_IN_KEY',    'dAKqU%F/?;Y19r@jN1hO_zbTVXt`|@RzX"D1;(m|K7YvU*!iycO0ptirj_zG/Xx6');
define('NONCE_KEY',        'ur9P3CK?I!a2trnXx7thDgKNA@kAeQ`A)zVq|7WRgd$;q6o*kk5YA2bTw1Z@6Z7o');
define('AUTH_SALT',        'vY/4D$!$DqOq|g)_|UxGN"N:VpeNg&vieEmZ/)V1d*cUZ6_&#Ag4bM4EE4Ih;a@C');
define('SECURE_AUTH_SALT', 'XO2nJnQ;Rv!^;_/iGpN(%@7v(1JdW+LBBl`Bg)/(A3z1yY4G5qg@+;w~Wn`EFVfM');
define('LOGGED_IN_SALT',   '*m8!vtU0`qSX@vMfEU_rWrr!/Jz27L6tpk&:C|8pV@hqPs+BR#Iwy|:igTNKLw!c');
define('NONCE_SALT',       'Af3(@?1*_MSx#sb+8$?"JSpqzzrAJ2K+SYWe^j^$AxOUL)nV^OMr@$0S5T)Caw/J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_njehgq';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

