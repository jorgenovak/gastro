<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.?1AO;!o5N-3]|LMy!c2k+|]T#:@3TiIMe0vgNGHII-3wUgsoZ+/y+-{/YBmrkBH');
define('SECURE_AUTH_KEY',  '/+XYU_CvRi,-Lh>IM<XN/$}-<#5*.dVMjWQ]{kF&mvS[=c dPc$b5giC=~ZI*?DS');
define('LOGGED_IN_KEY',    'T1os51U2+[A}6pq`q9MkO|t1sX608(ld4%,]2^!RGFhfJC3},Q+(gj<86nvQF2qB');
define('NONCE_KEY',        'rdDO|D7gU!D[`cf/~3-4.AyoHo+jQ8}v-$YdS}F2l}B([i9KCRo&HL!X;[,{/F(T');
define('AUTH_SALT',        'b!Ub[Cnw5DHldd~9kuNP(Yi) YQF9fig{71TQ:-158Zu~J9ft,@{pE}M]4X5pC(N');
define('SECURE_AUTH_SALT', '0JGN*KzMRa{<.3a?BqdB!)4wfBOL$6wE]dPTA_KwCEv-^<&YJ5M7@YvJncX7PHdH');
define('LOGGED_IN_SALT',   ':[3PpSewU-H$qF90dA+b*tI=Ah~Vhi[{ *=!F_4I/I74F/]x(dVy/<(%=^&j )2S');
define('NONCE_SALT',       'nLk~PWT>qm}R8kAAF]V2+eN4s{:6XwN5$4,NVC#u$>vuPt8L<mIywVvolX((%N59');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
