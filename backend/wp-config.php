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
define( 'DB_NAME', 'poluostrov' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0;ilh[=UbdqMD|KBZV-K%GvMI7i,*Vzg4PY:Kn={V4#&8a/ u%a+_..[)UFPZV~x' );
define( 'SECURE_AUTH_KEY',  'pw8l5^kVau{z#0p4Wx.icEOLKScd$Y|$~)[KG/hNztaV8d&?c+>_MiqhVjG4# !Y' );
define( 'LOGGED_IN_KEY',    'Pb3uV*Z8j8;qYT@WDhP/o`{!EF}jKgwz8VC~,yBQW$ajyo+  qT-aOgEPDrP%dWW' );
define( 'NONCE_KEY',        ':qmN8e.8arRz8G2OJ<Z6FSt:a6~S(D4:7K+B=!m9#H_b}_5QdJbNN85=4Ev,d=9j' );
define( 'AUTH_SALT',        'us(_Ni(m>RvH*hJnI((D /xcHs+.7ph-+X@{y[I u<$R!=^CejQNq$.c#|)AA-kZ' );
define( 'SECURE_AUTH_SALT', ';2DGf:Mr$nbwQLen,W.B-..F#e>2^!IQ@g3wh.x^{sN.^!uT>zyVw5qA,q`8CGRd' );
define( 'LOGGED_IN_SALT',   '^(oxqo4.Pmu1I#[%crz@! |fP3QsS5~|z&c<:-g(Y{et++_!/9XW.yMN/JD _i E' );
define( 'NONCE_SALT',       'rp]jiL5;K;-l7G/Eb>W=-5.kaY{B j^[4fp~IKmV~YU&|0rC4|QG?ZT$[# %)>;V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_poluostrov';

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
