<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'oVBEUkeNjdiK*kU-X6h/,ORh^h&Cw;/~BFrrJ^M`Wh;=>ReZoiv53VfN[Jo#r#9y' );
define( 'SECURE_AUTH_KEY',  ';Cjl0CLR4-8T]-7O!A{dL7JA0!}wov]SkwZc8(<KOX7pY@vl(*sPs0n1fJ>-msx(' );
define( 'LOGGED_IN_KEY',    'T$&y!kw{C^,ik7|DJ+0&/U5Y:o$9vw?`gIa^KiW|3ITIHqH^5a%5=7JC|l^Bl<3-' );
define( 'NONCE_KEY',        '=M9f*Lz,h0Wc+=wv_nd(U@7E8GkacFQR2c=6TFBhujG%O{Nt*g`#x<G@YI&2+N.S' );
define( 'AUTH_SALT',        'H;rYYp<%xt<XZ`^$bO<^!*0^nl`gz|UrF)8k?V@MDty/];2pe;;KWa*3hYv>$<Ry' );
define( 'SECURE_AUTH_SALT', 'ccF8Dj@GSuBQ&D,!y)(qu=D*G],Z *s|u.>tJ$u@n*l`wHzsd3-klBS9ldDt|26+' );
define( 'LOGGED_IN_SALT',   '+3oF}w1_^74GgTL>%/+TW%a`Jw^jo`7N3Ec$#:ex&R4K*R@*{QPl$&yX-AE*0?CH' );
define( 'NONCE_SALT',       '_WrOU2._Nob6swZ9$)0~9xLiS&b6ntm0,F@ldl6]#I{Z&+P)DT)%g:-EtP6L_et4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
