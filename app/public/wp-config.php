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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'UMqnOVx7cYZ^^i(t@p,b$;b3k%(M93ra/{b=.XG-N~+2v!gF.w>~ 8F2 vP[XAyc' );
define( 'SECURE_AUTH_KEY',   'wyUm{&3%$0w!cKKK3nUx#&f`M:#>XVqF(^X1p#Qt*v^ ^[(=AR!)p>`/cyB%DFbz' );
define( 'LOGGED_IN_KEY',     '{BA{,;=n IDW1LN3mG]FI*Bn(p>2M5~%z)pDJ.tiQzasF{O-06>*Z>WQTz>)|-;%' );
define( 'NONCE_KEY',         'bAu(rIN{V!R=2*(.D+LDAjaNKPe5+$x^GDnywZ]+:~W11lKBfeHoFkMqwr0{vz}W' );
define( 'AUTH_SALT',         ',sX)pNWe!70W})(TTBn}hj3%h?so&=lH=492=>=6RFE8smU$Q]-TU*1;!<FEXV-^' );
define( 'SECURE_AUTH_SALT',  'VFOkz1j7C)ase{ZtT_Q}s1dg%-v{JYGDuZUH7QYkWAF>a:3TlUk(Ql/n|N~v;9+B' );
define( 'LOGGED_IN_SALT',    '42No_Q*5jz)6ev@IkxPYHXywLH~h}m-Cu^fBI5~E?CQFeIRln498>-,4%|vzuKX6' );
define( 'NONCE_SALT',        '$lG 4pPg_.=NL<=i,]*P>PL&{4%qxJgU}3nQDy@r13S,k-40P}K<Yf(Qt-W5EF/(' );
define( 'WP_CACHE_KEY_SALT', 't&NDC8*upFZ65#C`b|$EL&p-CSbF>`Q!YA$TTGin2mA>NVH.=HD%J7M5W]& u1mT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
