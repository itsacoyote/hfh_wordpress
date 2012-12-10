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
define('DB_NAME', 'hfh_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'O)1U#j%s&*{iiW+T;ayW0GF%BQ8U=JrDr%DssAI3c6nPqZKFLt4T6(Y#e2Jj939s');
define('SECURE_AUTH_KEY',  'G {:u|{G%4j{qIIb-p-,;gtJS<T*(d>$wJ8X^)74?9Chb*Yzv1tz& 8RT1t-0RN_');
define('LOGGED_IN_KEY',    '54f^>k.)xDT-F-8+LQK- +HJK6|k:J|)Tw3iL=TL|E=Q y%7/83^ P`+c#~{eOMh');
define('NONCE_KEY',        '5Y+O[&NPS-|-fLSID6JViHuHa%lO4=@#Ws{y]ttU2#chO]a#`2^.M)y0~+MjKGnq');
define('AUTH_SALT',        'Okta_>XFs=H!pI}V?i6eVdE+BWXma#L:PenVPF9Gu5p|>y%@|[cLd-mto0($LhxU');
define('SECURE_AUTH_SALT', '2u~*N6fJbyV?ojv+ &:1yjrx6TAW4n (>+;n!Qt$K BFnpFR3ERy,MXOIr|WKzG#');
define('LOGGED_IN_SALT',   'V&p,{,?]zZVYiVq??gV&^UpSrrY+<:}gXNHeG#|A?LuzKm0m7j6a=>X#s[kDQw*N');
define('NONCE_SALT',       '{m=(yi$F&r#GL{t~4JQ{rk-.^DJpH{bBd#l?%}I4uE;~~K.=02%Na98G)cyZB:Q{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hfh2012_';

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
