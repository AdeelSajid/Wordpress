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
define( 'DB_NAME', 'chocolate-dbs' );

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
define( 'AUTH_KEY',         'P#Jx@x4+&eQl5;V@`AX[},;+Zv1Zeu)#V2.H;=wQ4e/)4u}1l?yW5fiIRSSHb2:`' );
define( 'SECURE_AUTH_KEY',  'VO0@Z2:MkSWMHU:N`Z|MFz;06N{[a6#r(q2/SS|zQt35|Mr2`hqXm@*h5(R^]CQH' );
define( 'LOGGED_IN_KEY',    '/{BZ0,q/[KqTh#f}ELGHN~]B@a|BdCQM3[NYl`Q^;A-8bH%0o}JT3J|AIA{9bR:w' );
define( 'NONCE_KEY',        '-;~py@d&8O$/Xo;Bt$m G$odF=e.!asw~,u@=U@v6?>&{N8N=t:&m%+_{&i.j>X=' );
define( 'AUTH_SALT',        'WRP6goPhqB0Uy(mT6+P_,7Y8r|>i;[->aAp`a.`u{rjc>PW&jxvKML9xd%#T}3q@' );
define( 'SECURE_AUTH_SALT', '.,AE4.e*I[.*#)X^@Se3hkmpUvXW7*v=,gCnnZ4B}7`rKuRS~66Tx6bl,89}87Dz' );
define( 'LOGGED_IN_SALT',   '9c;v%&Y*HbM_Uk%j,I:L,r49$-RuG`.$.WZ1k<]`iwQF-$kwe)e;5p&~^3h|z_cI' );
define( 'NONCE_SALT',       'O|xw2,#N( .OVc.+7C!&ff}5-E89?_Q/+DX)UO1B7qW@`U}Ei$k$A_z8J{AGa%(6' );

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
