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
define( 'DB_NAME', 'lifelens' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vQcd }ga^;Ct16$g,Z#m%sL|Hme3Q,<-oj0vns+aA_d<XaJ6w<k<0#LM[!qV`wO/' );
define( 'SECURE_AUTH_KEY',  'QLD5uUTuD2qI[LFZ6^)C@5Z[OSPaYkJR: ^[k<6@oIEe~Wpe}+z,nEPy<f$r[NWY' );
define( 'LOGGED_IN_KEY',    'htw.<=a7CV`P SO_SVl#`>DssBx~Ks:6pQ%psEt714KNrW8*n[qVv5ACMm]eug]?' );
define( 'NONCE_KEY',        'M`z-s&Q_$sf7^&gnI$7o{8WWwu,68Cs-d$gK-[l@S)$dI%tdjY8haA-%Cw]l$ipn' );
define( 'AUTH_SALT',        'k${qGhjLh_~[0$#{McX_t-]iR$Y6E-=-xBAoUl3v{^O[L}mfm-ut3-8EJn<Sedp&' );
define( 'SECURE_AUTH_SALT', '(H&I~:wfAaiSg1j>N( 0adjMGw~|*>;TOYDOp&22oX=Pa#@UIfxD2;k,+h<D] ox' );
define( 'LOGGED_IN_SALT',   'Sut6xin;`}I(|ruMj*va!#Z1H~K83=Ugb:2zk3tWxR=}^acR-0R|aceI-&B}.N#L' );
define( 'NONCE_SALT',       '&^YWN*a-S,xX>6{ =xs!IAiF|KY#Nsxy0.o?Q*L hN`l4u8.AjMM~G$:ziI|u`90' );

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
