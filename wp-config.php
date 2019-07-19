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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/ScmMobility/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'scm_mobility' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jTBTaWD2yQ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'PLL_COOKIE', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xaMFPSf,PUV~dHg{(P&^ep-IheT^WyT#DI>bm<,<u#>0!]dEPb<%SB0z.hW%)pL|' );
define( 'SECURE_AUTH_KEY',  'zV|,$4LaA/+>f?4_mB.5r</E>!t.=]nLa*6=a&_<eU@5.bK@l5Q>4jQd&/V4|Afo' );
define( 'LOGGED_IN_KEY',    '#b)<vjA^U~l)U#PyLdO)aC>(X%@uaMx^*8a^H&X/S-r{*;gzGawc3L.Z$[h],4RH' );
define( 'NONCE_KEY',        'w~vnpz]jkdj?1vF>-E:+,u}=N2X=`cr,yDO=je-@oXFcPGk9QK^ay()Y=|a<Bx=(' );
define( 'AUTH_SALT',        'L/ei$>q)Z()T]n2RA@|Q3:;0|#a[fT0RwMHb!WW~:ymOg{Y^:(]1PUd}(}E?b_[5' );
define( 'SECURE_AUTH_SALT', 'nlOn~Gj[s>=U`K9 ue>A}NzTc:uG*/{F6{#ag~sLTp%_wy{E23kUC/595dehn{w<' );
define( 'LOGGED_IN_SALT',   'vopO=&_<4a#WKOC6-~d_RC3^tFJ!V0?,b<4c*B]uoY[%b1K52RjiIw*;$(2`THGP' );
define( 'NONCE_SALT',       '7@v2phAvJ*OV1tz}KwRF=Vf`8flCA(WF%fnOBM$fT,Ai5DeK;gb>p}Qlc01Wo`#0' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
