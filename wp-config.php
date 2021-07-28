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
define( 'DB_NAME', 'torajacoffeebeans' );

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
define( 'AUTH_KEY',         'h6D%oP< HmpJp0zrK%7H[-t-|u|=F4p^)TD.~4@s)+uI/E-?jbLeKg~HbJ-2q9><' );
define( 'SECURE_AUTH_KEY',  ',7QtET.OW8mDqUY6Lk]gWhI/RZrbG|kS;Z6SwiKfKhLY[pTg{qdY%rDPZSrNJZzK' );
define( 'LOGGED_IN_KEY',    'zwWT6!HY*_[k/L)j 0~Z_lJ @2NLr2^qkcorJr)jLs^20V@bnncNC4>wp9#53z@y' );
define( 'NONCE_KEY',        'M65N&$Uw7B~*+P4?PDy>CR9*yOxpporuIS`&`>tvo!@k8-{CY)tu^F#S]ovgBN]+' );
define( 'AUTH_SALT',        '%p?j7+.$d)>e<Gq>ZH6fe#*(:$Ai^h*?DmvVf[63`tD3Y-I83NpRMs?^F%+M?Qjg' );
define( 'SECURE_AUTH_SALT', '1gHh}62tlt,mr@Nd@eKS[ld|L(y!IU?e7@me<bH`IFr}Xj2w6+PN[.$?C&cf|20S' );
define( 'LOGGED_IN_SALT',   'X?=%+$AZ~!ogx=^hB7t(G1KaC)Lf^NT#c-&1*E&xENt)+O]l#O]vZ/KD-8{{@5%8' );
define( 'NONCE_SALT',       'i,P+tzS+0gwY9?<f5Gvzw+3k!9E; O}Y{*F0)@6rw]!Zyu^-c6w_)F ^ 6c%t5Y$' );

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
