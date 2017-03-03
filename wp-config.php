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
define('DB_NAME', 'c5b43090831379');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. ~ LB I may add mb4 to utf8 if web host OK w it */
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
define('AUTH_KEY',         'mki9? V(-j+|pV)f4Z)#[H-?Q}[ OF6qrr7P38S;F~7O@]WIgHr~PY]sx;jL=-+%');
define('SECURE_AUTH_KEY',  'p@$-0.Sg^W<b85T6(Xc+/?U~8C`qY- MU92uNx29sm(8aM80bm5OgdJ*CeT?+b&3');
define('LOGGED_IN_KEY',    'ILG26WF:B#f&}d*?g9H@.G6T-z&;X>.]VxG`:)pZ.VkFRP#H<oj#q#yYFC`7u2QQ');
define('NONCE_KEY',        'lKymG3T9^0CRd]Jl4C{G~~vYBhujTpe>>x6+OfgWMSw92Mv,n%AYjh#nFqcW}[=p');
define('AUTH_SALT',        'Q=HQd**:YK!3*Q+D<yvHtcfyS-*!l~RnHbq,*C*+H4$vm-yqx]m>:9c> YiCSZ9~');
define('SECURE_AUTH_SALT', 'O@B5gLR~w0g_M?;w9U8Y1S?zG#.CYGr-5|xA^X:K4qm%HCx+AR<?M1tU(boyvCB&');
define('LOGGED_IN_SALT',   '+>Qb)&VqNB~wsx/Nb0)Dp#y-`uGmm4+,IH[;-eMBk1>~[4F%w)i]Ovz~|W}:7#-n');
define('NONCE_SALT',       ']CALr2^./lKe*%{?^Zw9u)sqIiy)vbSHu|do#b+>-Z axKm$)6[u@-YdLZv0ERdO');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
