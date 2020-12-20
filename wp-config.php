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
define( 'DB_NAME', 'wp-cms-nhom8' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Mq=7oGN0&)xpw+1alWo!WI[ooufGe$~o)(Xs8vq-oEnKjkn(M.+hI/)z;U#Brn6q' );
define( 'SECURE_AUTH_KEY',  '[637qn1).nB6L!y)hJa8@%bdi-ce5ApW19BxXb()@i)QxVru*y%T)wCkvGy?msC,' );
define( 'LOGGED_IN_KEY',    'Dvx80.LH5(pV%w1N1i7G=$lU17bk-PB0Wn#B]pZ+SN5xwot R>t9M3tNRx]`cnPF' );
define( 'NONCE_KEY',        '5i}swMmsQ<(y]SW(RATIO4!w+HYO<$y=!0lafj.gA/T X.`=VG|kL4[<~;Z <P<P' );
define( 'AUTH_SALT',        'KMkU7FFm,)S>1|mSTOoNRn?pV Tg.9=-&WAITxpya^7Cu! !X;$gxD>PX}tntI@Q' );
define( 'SECURE_AUTH_SALT', 'V@KTl(!H+0+2jLGYF+dm(X9}g-lG&qib]zs*#K!1A+>>liIJSC ID#8EKXm+JU[K' );
define( 'LOGGED_IN_SALT',   'j:qFN}PQB.wP 9qRpaE/<Jr4z In{j;U>2g5E,c4..m)>Z9E%lV07Wj_Yeq^CHK>' );
define( 'NONCE_SALT',       '=In^ YhgkqPUF#MP+]Njr.>}+RBn+Uvy;5q:gB{{)RMvSur~MUm6O_,<<cVuEAQ]' );

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
