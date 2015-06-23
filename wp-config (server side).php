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
define('DB_NAME', '8020_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'MYXWshrC');

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
define('AUTH_KEY',         'IukzX1Hwm$Kkj>%IND:0|yKxi?WO-Z+?ByHK<cam5H.6]!84-6 .MaCY0=&:_{]h');
define('SECURE_AUTH_KEY',  'n53{CSI~fG&6i?d<ji<uQ:[fzgp;[q1Dn|~mk3i+2b|MgE9|JGMPnhL`X-Gyt-^5');
define('LOGGED_IN_KEY',    'zQ!gf)0|7v$yI+VlFEw~uyL>bC{8(G%^9-+ jiLV($+2jd*D|QAR=;U_n)5v QJ<');
define('NONCE_KEY',        '/-e9(^MBFc7|owUIAR83yF+Rc<R4RB0GA0L[4R#0?p0aFEsdHc:d[Zc%v-PFJfez');
define('AUTH_SALT',        'k*@!tyE9jVG`wJ0`cl&RK@M8W2n.XbVPERi3~w?6=w$O>XbJ?>]YlszR&=ZZL$:y');
define('SECURE_AUTH_SALT', 'k)WFuGxT4u9;|sm9}tL0|^Rv!/K?k167,9Qcs+F_t>9.`=^)N8C4qPdt1D,&,o`n');
define('LOGGED_IN_SALT',   '-*kRXr]F{1q[L;8,b,3&P8T,)U|Q1m J>@F,ys-|N<)+pbKbP7#|%x_%[*>dZDaO');
define('NONCE_SALT',       '9g+RH{{R,|_5%goPm1k1_T+xjb3T?vEWr`JCXE3HNe1*&ehgV+P_(*FT+Om3>f;I');

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
