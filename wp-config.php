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
define( 'DB_NAME', 'mymagwp' );

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
define( 'AUTH_KEY',         '*D!kIVElEwQ~6X:01h322p0w_lrw$,KKs15X9 VZs2F99B*vnR *C)I}<1Q)hrJT' );
define( 'SECURE_AUTH_KEY',  'jwrON,L*!/eQmlU8O-23d#tid@;mMp5fA~>QaV%y08Xq)_xNDS](X#>9u)nVyr=N' );
define( 'LOGGED_IN_KEY',    'TjK5y4B26+!$XN[]RT^vxQ)y>WI{mlPG0GqO3rp0$b-,DbBTLj7~IZMm?gx~TY&i' );
define( 'NONCE_KEY',        '7m!gJ6pix<KUBsOgnvtRA<qi9QNeUQ[5b+Q qPS^~P]C*;q#Qb5|9:OBsMSQYE9o' );
define( 'AUTH_SALT',        'I{Z-U5z[I0n.QUji&WghA=SRrdCK.>BwOd(VK[]T;Xb81,S*Mr!U7{j1:OiL0?fw' );
define( 'SECURE_AUTH_SALT', 'eB;B1`~wd6Jn,QHyMBBF;5[F1j5+1MT#dCcr2FEf^+SQMcgxOEeP1]F-&V%X+(6)' );
define( 'LOGGED_IN_SALT',   'jGIr3^A8H8B%KRJar`FiVSOt3cMY17sFig.,6[Yvt{YW{i1!Y?cX8rkOC9J]>9D%' );
define( 'NONCE_SALT',       '<U^ 58WX?F>f_uEq7)0@SL?&$_)K0W@tj~>3Ot66Sqq3c_SJh3yA<1j)SkaSHy &' );

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
