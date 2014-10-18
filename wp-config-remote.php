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
define('DB_NAME', 'ccwebsonl_wp');

/** MySQL database username */
define('DB_USER', 'ccwebsonl_wp');

/** MySQL database password */
define('DB_PASSWORD', 'V9OHDNrR');

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
define('AUTH_KEY',         '|+k2jdbG#[73Oh|:=wB-52 N-rx RNAy*YC.REUir=3N4V@+*xg[Dd);vWx+$$;m');
define('SECURE_AUTH_KEY',  'I0+f|-+</Z_s8:vWM+kWgX$|C$8GC-|CA`a-ga]J#e}+k3A_i/Wg7)BkzE8Mzisb');
define('LOGGED_IN_KEY',    '~/D9 2ivRhe+~q9<w:=Wd9tX:ULl|9a|?,kT=-N}M%fa!FQw`lEvZp)5WZ~AYuEO');
define('NONCE_KEY',        'g7)<TB^G{#ja,oX=x3W-<M6j-%S8_z:HZ|RVq+l1:MJK&POXthn3kRPvAfmPoJ~o');
define('AUTH_SALT',        '+YB]~|YL*bD%Dz+#~}Z]!2<<tBsg_1t90|v2g4z@n^+oiu+Y -CK+i}wqC)KB`TT');
define('SECURE_AUTH_SALT', '^!Y~yJnk+x eMSJ_.)Ah4@.M#+T7L|Uj.W9G9:$z4vw7Hz^r}_]Dy@lTsF*i<m<6');
define('LOGGED_IN_SALT',   'Q$)!Lx@Sm2TPF0Pt-A.(xT&>1+haABhosz#|^s@d9p|/5.J0wy5[MF<7D<W%FUr8');
define('NONCE_SALT',       '/}_=-O-ap.r~:!R|hZlb.yiE<-IkWR>| UiIISN<l7-cOf6cd{kJ+c-K6mr,y*H*');

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
