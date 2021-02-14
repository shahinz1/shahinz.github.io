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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X>6:xBg#]txncTWtPG/mT$1F>@wY7P|-c5+gFBEUyw f?oA4x|N|ijw48aYR.rpf');
define('SECURE_AUTH_KEY',  ',qk!YqAFyQ6hX-$,cFTQqFY-G$<&K-5{h6h=+LZxt~o-|.8Z;^mjX[`D,Yn+g|cj');
define('LOGGED_IN_KEY',    'Y>G+oprV<AvZ-s|`l7K1q7C>sDFSgUH<IM<GBgS,jb}N<yan}Let-ikd<VEDUo8r');
define('NONCE_KEY',        'aAH@g.!U7.mEa:.Z07EjEN%(^Sb)kcx-HSx#54ilA]XjVlv&ZLRi9i1|9p7]*My+');
define('AUTH_SALT',        '.--A;|<LioO3A4dTmrCn2Fq,*d|kW8C{F7Az+*L^J{2HAZs};</L*VjFtc|RhG/(');
define('SECURE_AUTH_SALT', 'hSl_QwT=S|x+7ta^?jIZFOB3{b]K5S}4xFk>@1,M(p|LMk#S#K/jgUp5oBS!&ejL');
define('LOGGED_IN_SALT',   '/EZ/g(Q8-}=?k76Qgcj: 0SnP{w4/+xRQkc$pZ<Ts@]DQx?6_Ki[Y;:M8s+HD:q!');
define('NONCE_SALT',       'p8!G.A3X^O!W;EI{I@Mf:ZC*pF%k$.Kv}chLJ/=jw$ XHgjhG|2AM>@%]|Z7psz*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
