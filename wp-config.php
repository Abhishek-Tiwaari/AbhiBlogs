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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Abhiblogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Tc$;<br=J~o+e&|xgs@:1cuN:xHnlS{r*bmQv9Et=Cna</s>)P} K[`KZ)G]T]Xu' );
define( 'SECURE_AUTH_KEY',  'Sk}VB!QJq<=Ro7zKIG(?.]w2eRCSncuc|.5nEAionbcC#a1Lmwsa{~v 7D0`@;E/' );
define( 'LOGGED_IN_KEY',    '<3hb#ag1q{WKM?FmzBqr@pV0kYRx:u@Wb:$rA~A.xvRCWs,6Rg&#i%r;IuO+0+f*' );
define( 'NONCE_KEY',        '0 1^0/Y)CDZ~Rgq5(i 2^*gF;d>2S*3WBe36-JWgHmyVOOu(S>`Bg(.@LY=.~B3U' );
define( 'AUTH_SALT',        'ZQ7os!|(o{[P@a((&Hj4U)Zc}n,7z}zh{,+>j_0`vO|xh|i7U3A5rK!C+9LOp~{<' );
define( 'SECURE_AUTH_SALT', 'h];Sl6`1<n(O-w^$w?5xz14w#$W@m)LU?by~B^v;@d?KIG0D{uZzf]$T-TY.1QvT' );
define( 'LOGGED_IN_SALT',   '$TbfB5+r09zmq$5q$>$[i=--Om:XI8$Un3tY(/0]Z5s1@U9`H:?`s{j7r{aR*cxX' );
define( 'NONCE_SALT',       '5)q!$||,uFGV-MQvBYK:+^,$Xim!bF`O1DZB6$$ gADF7lk<Zf+KH|~G_A3bO.P1' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
