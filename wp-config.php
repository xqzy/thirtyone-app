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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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

define('AUTH_KEY',         '6M,HOBqf2l86R28co<3Aevk-iwOGN@L&-Wm!@Hws){%$(fV+Y)+d7]<-/++}>X;o');
define('SECURE_AUTH_KEY',  '?Xqi-2o@*WUq(Xoi6<M8AQ2,8}-R;]YATh;TI~6-1mAHfE[($HO/cZ)5jwdlq#Pz');
define('LOGGED_IN_KEY',    'W$|21>4(pZh>p|FxA,LEc*y!_but;]sPYG;JkgWT42g?t+L)EbjmXm:px(y8=dYu');
define('NONCE_KEY',        'Cq7#X?:TJXhl]H@l^+~no>nG)mq;|0)B qB8s?{Yz]nCM:hw4 ,8Gt|A-9IG?Kw<');
define('AUTH_SALT',        'd~$rlFk}O#V EEH3~&M>Wmx,+/SvdW&jP;:Z2TDWU=:-j+U@-hpiukdLK;?BYGz@');
define('SECURE_AUTH_SALT', '>aX?0MaL=Eo:k[y?,MOm.ZfC?KO$w{*Y8SSH|JG9?:w4o@wYW4onB3TM8F;+IM|(');
define('LOGGED_IN_SALT',   'kc7*AyEJpl|4xzvMb2/Xd54oK%8!P~1zSfkm9kAd+beuun:^VG|v%DYUo]`@=&Ec');
define('NONCE_SALT',       'wKjx5+qC+fl@YF`c-bMzMj~Ut.g)sG@@8~+>vas$:SJp?3-;-. Rmk-(([5)c11;');

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
