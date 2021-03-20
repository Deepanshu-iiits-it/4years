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
define( 'DB_NAME', 'wordpress-5.7' );

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
define( 'AUTH_KEY',         '4|QqzZkx!s,[T]J&Fsy?@HofVBw>@$bVJDPK(.;6q!%Dcwm%nnHnlB3g,|W[wYLB' );
define( 'SECURE_AUTH_KEY',  'pT[w4QCEZ!b)WP.EBY*7d~:#Hnth9^W.k:Qy!KpA+*%g(Ssl%-xgC!yZo5cy,~Tn' );
define( 'LOGGED_IN_KEY',    'hIo)fsye$Y9Phgq&{;1ixiPCr_SpbJ3MVc?u^a</O!w!CY4Xr[F/pAhADdQoVLiD' );
define( 'NONCE_KEY',        'j1y3-}ct1bq&WC^4n}dk[eu(NVY,b)6T(2ByL4E;S:rB]{#w5|;R~i[d~w)j#,%c' );
define( 'AUTH_SALT',        '&Dd7tifD8c_`]6h`,PD|!J_F|Gb$03D{ipuW{eYTYWz~.1]16F=)gy.J;q;7KPbR' );
define( 'SECURE_AUTH_SALT', 'j1P`6 +)V5Mi)O,sS&v8DRwFU:{Oq`G[boery /Ah=3kRYqL>N7]11OOmd!5:m(G' );
define( 'LOGGED_IN_SALT',   'Yac2Y|&!&+q|OW[u(9Vt9B350;N>3vk=yDV5DBwd-C|~&cKD_OlXt0z!Zoh43370' );
define( 'NONCE_SALT',       '1J =EV Ru[npT^82&C9!K%L3{Shw$l=Or+Xka>n`6=mu#eR&;1uh.%/AI{0?L^>n' );

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
