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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'T}lKg.,xmszM3zyeIC!qOVUr)I1OmAik?j**CWZ[Qw?<HFhg3VW}E7tyo(bO>]J?' );
define( 'SECURE_AUTH_KEY',  'hLrlz81Woux1N68?I2F-x,^H%s6y%>+Cu(*foN8FmVYPo>2R(8`AV&(#Y4(d^jKb' );
define( 'LOGGED_IN_KEY',    '_qX<l.s8[C%rpt(#]LV?pXrHsi|8XV<a`VgaoJm5;={syQ$&]zY,jd<gAC+6)SZ)' );
define( 'NONCE_KEY',        '80&[gU4v&c$kvg!8E6qa&*k*`VyTjRh94~L=Q9mA2P>I)9zqXQZ=vh;hJYdYAqq^' );
define( 'AUTH_SALT',        'Py>v>!Ql8sb_YOV5()Myb0aa^hds#<RqK3;i3k3$CoJ!ppr~5)9sl=`@Hc,_7_k[' );
define( 'SECURE_AUTH_SALT', 'x%x9Gsbm{x`>*>?u`438aMIZsPfP3%EPyuvreAmkM)~aFaP&SSPlQcNPd&6,C!Fv' );
define( 'LOGGED_IN_SALT',   'J}$fBo8:IN<iF@zy|2#W^,y}KcBteblg>mDb+rjKo6ex+pq*$;s[[vrzkYU#{_=S' );
define( 'NONCE_SALT',       '1vHN]tARr=u3~Hq8(4=(i)yMWpe,RtpIDQ=PBxT[(,OvX@r72fEMdo43%`G]&{qk' );

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
