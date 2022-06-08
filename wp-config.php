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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'databasewp_2' );

/** Database username */
define( 'DB_USER', 'fery' );

/** Database password */
define( 'DB_PASSWORD', 'fe12y1238921' );

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
define( 'AUTH_KEY',         'wnCiU8+v7P^]cGqtMa:5u3#v^(>2A,m$B:Y^<{Il.6Qi81mH-/0}K,ng&(lt8:yA' );
define( 'SECURE_AUTH_KEY',  'w]6iYl-+F4ZvL`-9g#Yvl<kNlP$iirdann!tR@Zi:7=8}wg.jz<1`@{44)U?7zVS' );
define( 'LOGGED_IN_KEY',    '@_85Qt)xag5Nk!,{Rw*6~,!vgMDNuA9,@/AS&DeCSuEHV$4UnfQrZ_>gkEYB1*J ' );
define( 'NONCE_KEY',        'qp~6ctv=2Ea`jH;5WBtH`VQDoW6m|B94EF.X%1:4<[ 6 ] <:alxvaH~66yk`z/h' );
define( 'AUTH_SALT',        'tKwCVSolL4b*Mf){(6N_k7LAS+R8h:qgms2i,>K4${RURCQJ8<za~mp 6W>VOt8O' );
define( 'SECURE_AUTH_SALT', 'UmQzp>0M}pkEZdo5l$VkXY,;eZ4t5/F3^W}/Be)~i,**>=bvLv]zAT6}S@v%|2aG' );
define( 'LOGGED_IN_SALT',   'ydIXW9Xpqr}#/&Q~=}twtJ7dF~^hr`Bl(QET##No Hj;.Hg3G2=K C4yPt~v=/x.' );
define( 'NONCE_SALT',       'FRIw ,q6^_ Jm[2>A kr8LyT$QV9xvNv;s1.ki`z!v4ngOO~*E/4eFfC?+)c9]lZ' );

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
