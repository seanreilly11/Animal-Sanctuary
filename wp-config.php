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
define( 'DB_NAME', 'wp-f4.1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '?)b/J9Py.:u!XBA$Wlik2WwkO(!)`x1l-Up;H*=(UoM6awzT0qY=x}d]T`e*0BG-' );
define( 'SECURE_AUTH_KEY',  'os{9]C`/;m01{0bg_HxS93dZWkvm4T}]Rl{$d~Au|zjG[?UeJRqAS7M?7FMj%WAn' );
define( 'LOGGED_IN_KEY',    '6^ZxfaP}uw+(e*!Kkt;Nq@P21,_<>twX7P )FoR}BG=?/)V4$> A;X=Gn-Jz%|t|' );
define( 'NONCE_KEY',        'Rh)88JD4~*RS+cJt7)|3gL 9]d~ts#p]$~Yiv5p#en[D01lgqi>m:K3a?*MNerFS' );
define( 'AUTH_SALT',        'Q,5HA_x33fCRP9qDVc]Eb8-/gqp!KY)U}u#$DnXbeH|CK:).em?=$W^/M7?3.M I' );
define( 'SECURE_AUTH_SALT', 'E,E.Qiu!wkE.d5vT#?LQV Qypq.0ezT=F@%A)}%Zl;tLMr^0F/O:xjrfc%hJ!Qxo' );
define( 'LOGGED_IN_SALT',   '/tlKeoy{p|p)G}kILsJBxFUKI_g9JP]eYIcw%5#y!OU^a3Mb;|9C*+]+TLq)5o` ' );
define( 'NONCE_SALT',       'ULN7%&,Acf4?YxWQ#>zlR. Kxu*>Rjd,n]#|T^iY,<J>B%p%1U/:O9ueqc#r+(34' );

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
