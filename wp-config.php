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
define( 'DB_NAME', 'wp-blog-2019' );

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
define( 'AUTH_KEY',         '}3x9eT7$3lHX5:-v$4K^|08HF;$5715QCI*M1e7^6q>#>Va)53I#@>xEOmcku@,>' );
define( 'SECURE_AUTH_KEY',  ',dsSEtSA1OJko$}t37~-u!@(G:4)Mv#}j;9YBWF}H[ce Ep(CP(A2|<D5]spEdV$' );
define( 'LOGGED_IN_KEY',    'h]92UB^lSp8B0*-T2K:U)zFnwG BQ~Sz_M>]5y,#;~.z1^Y^{rsElZbT$B}7?PC!' );
define( 'NONCE_KEY',        'oD}8[1;kw1`B0e8pvI<MgRY^PJCIzasXlrS1k|^s FMn4Lw6kohSrd.!eSmtxm%b' );
define( 'AUTH_SALT',        '4c<2A% oVAOU8oM|DqqP?bL=h I<,cP3NnUF0~?GmaM0l_)04q(bi0lxW!h{^r-(' );
define( 'SECURE_AUTH_SALT', ';e&+B()|e*Wbb<mgiZS a9SB`2]yHti8k.ZWU{eP$OpGNLOzxn$e|nQ)+AUcmql)' );
define( 'LOGGED_IN_SALT',   '`89Qq,cNi2m:,~M7N4t#(*)SH>J6A[Ne_n7zx6:9O1Q 8[a|;!4E(JA:w~HzV{}|' );
define( 'NONCE_SALT',       'B|/i{cj1;hM 8+bLu+|)HQree?h:CeT[/U(#x|$bLU*IA~^!af <l3zUmr-%cVSX' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
