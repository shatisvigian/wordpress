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
define( 'DB_NAME', 'wordpress_test_run' );

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
define( 'AUTH_KEY',         'Z3V?h/</ac(MU&t.dlJP?qITauE=zBg*+>y7^l2v2o$`ZrXRc, ~mA*+-]ivH+nZ' );
define( 'SECURE_AUTH_KEY',  ';;+DBx?HBYBEoli5X&mS~]_As1l2JoF%?`_l?Hw$UYl!]XJ1* T*kKQXr>50[mIO' );
define( 'LOGGED_IN_KEY',    'n[odL*}9?A3QGxF~&7mSG..m_D8Gv`s74Y+!t@ K=*i|,`S9,h:1iL~GFcKVan`%' );
define( 'NONCE_KEY',        ',@.i5)<qzz$FMtFXM{k9CEiaojr@O`&SqrYEQP*{+!%SD-e.&1^mv1AADZ+S~tpz' );
define( 'AUTH_SALT',        '|-(NtTmkL@X0vh1]{+R@mnGJKla![P-MIz{9;%[Ei#i?w.vv/NnA H5PIvAG|MCV' );
define( 'SECURE_AUTH_SALT', '?LR:<;|{hOZUL@ Vi?N3m@#9F}2Go=SF22XJUWJdF}.dt@z^4EM?seS}:hT5ZH?t' );
define( 'LOGGED_IN_SALT',   '%r6BvDxi<,PV?RT@{X$=&T|4QQ8`r2[19FU@JpNmUGG:b{Wp$xvN*b+x:kou&B~Q' );
define( 'NONCE_SALT',       '7kPf[TA%bR-k.xD[KX8.Z`vZc9GcEvaOi,]^_4s0:|V*P:Q.F|):8]0d^B c/:Vn' );

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
