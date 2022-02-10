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
define( 'DB_NAME', 'nas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'O`3J)OJI6*.A3P[Vp$7N]=)H}2O4hyJO1N@e,E_vhHgw[qgqr0;dAW5Ps=5U>@5M' );
define( 'SECURE_AUTH_KEY',  '7}NhJ|>6 8cNpmn7=n%KuEJ{hHa@,YdTa[0Kos,4tiMZ.EqP`+_zcvB:I_= B(KU' );
define( 'LOGGED_IN_KEY',    ' X[R&!:*-b)mI6=!4oti#raSQ.GGt.%s>gH+@G8eS;wS9@H#nf(H 2%9#t%uf%]&' );
define( 'NONCE_KEY',        'N$NI|o-l.|nq893h*8c_ 4[Tp(IWx>/5%]V3X2Z1UYq4KW#Q&8%Tw6i4<Dd<X09Z' );
define( 'AUTH_SALT',        '8dJ[CX .k++U$`z2nE1D|M/zY*{ULMlAAndh0b1a, z[A9~q)Djf&Ja~Q:*(lX>y' );
define( 'SECURE_AUTH_SALT', 'O9(SsyrR~q(kuRGZPnrqz7N1X)TI]g0)*K?~E<BS9C:D|0hrjAvg4<w*Gm#HhU<<' );
define( 'LOGGED_IN_SALT',   '-6mku27TR,Q{Q%|L[XqNWrD6rMdZ!NI&vIrn>|WdNbvzDM$BMyWXg/BC[o^^l#oF' );
define( 'NONCE_SALT',       'U|8Mn[x86(hJ:Hd8*:msqXBKY70M/]Dig!wNbl<U1rHH3R!p kDNbisl;QAkD}pw' );

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
