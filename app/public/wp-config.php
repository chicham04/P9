<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'E76=j/nB$-*ma5=1W6f|;IA<TY2-8I,x`)9DyAh=]7,xs%C#u89LC}u[Ul3u+u$E' );
define( 'SECURE_AUTH_KEY',   'KHpD$.(Cj,t+j#t}uc~.Xh9;mNK=V(PTqr7Fn[_zY0a$nJ8S/4K|r;PJ}4uw^QmI' );
define( 'LOGGED_IN_KEY',     'zAy^9LZ2>t,-`3a^:FlBgN$Jf{7@vEp`Vn1[: }%-[)iV`vihV/UBl/cfD>Y}EZ)' );
define( 'NONCE_KEY',         'JVicgG{?Fs:Th]@x8.$l3).EsY:-C*@7*#}]t;&,OZfM,w?~m.)kqdC&;DLVmB>@' );
define( 'AUTH_SALT',         'z4PCU*H W:$TwI~<baab0s3K`<k|s.ZY+tC_q{[[od=.kFz..,i3|Xxo/{z2+QnE' );
define( 'SECURE_AUTH_SALT',  '99;D|Y7>3ZG9c.!4,C+==lQ6NK~+tDG/hFhB0t8yx]w6LK3+W3M/T3j5R9OpP]1v' );
define( 'LOGGED_IN_SALT',    '<l|IDYVn52y[@|9Er>hfG@e1yGuK}9Sg 2;Y}~u*b4fMp)?*b|X6?^jfW]s(RII0' );
define( 'NONCE_SALT',        'H={N1<K>=mhjA/ ru.tII#O/xRWHIz^<9_]Fzd_k)Esef~MH:_6Y~RT>dj4SoJzn' );
define( 'WP_CACHE_KEY_SALT', '8{(6tzIT GN%CE@BMq?YWxH;IyXt{JY?]HMK>Y1v9!XO;a}q) R%O,D7yC%.=81=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
