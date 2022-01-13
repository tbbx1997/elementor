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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Q~X;bRy2R7~`K^@znO_!je-lxQ&aoWO*J)eu&SLtJ*^#}6` ytM~B/4$rdk|Q2F#' );
define( 'SECURE_AUTH_KEY',  'T NR>$FKjq{ak y6q>;;H3in8hfO|PtLKZoi]zM%:zUC@+A,RK-fAn_-)#KDTvlO' );
define( 'LOGGED_IN_KEY',    '!~Ov4J[]:s=,2@}:QgWz9M1nDH3nE>l)jlAS(]T/M8f.7Fm3XZogdqLx2=xd=s2i' );
define( 'NONCE_KEY',        'z_^6ZmT[CTM$P){KDXo4%_]I+;Nhg]M(7hbeQNbaY-zx3qA<J&lBFjym`yF2>AhP' );
define( 'AUTH_SALT',        '7|Is0z~+<#-ozLtAP+m-S8l*eVkKr/|%E1ddsc*aT8aBYTC ^DZTQ4hRaxi1mMza' );
define( 'SECURE_AUTH_SALT', 'eS{VdE_Cr:),Wamj`IQ-M]i#k=#)?tN(pt #8%(F}fzo[ F,+Z4&gnKG0=={i2@-' );
define( 'LOGGED_IN_SALT',   'CN/&!xN/kb`Me ZMHeLEE&r&M~1j6%=Iu c?lpb8n=uBLfxOO5=ZHz/a6=yeZi(u' );
define( 'NONCE_SALT',       '>lg]F*L,#1Rj<Gwk$m;AxV?w%TCp?ws{g$fiJ0`R_] I0JDV/D[k;hp9v`NiU{-U' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
