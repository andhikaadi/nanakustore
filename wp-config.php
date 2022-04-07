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
define( 'DB_NAME', 'nanakusnack' );

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
define( 'AUTH_KEY',         '}$qfrDn}KasqPAiHKP6=p`>Y@e.BK^`KqTgDKFL=t(J{m4D=uqI/UDrmc49RX4hS' );
define( 'SECURE_AUTH_KEY',  'DmqYr*c-4LsRkIX!_$j$*Q(RLiqnlqTcUu<o*GwWr45l?b)=.K3-#d%iLg[PV9b<' );
define( 'LOGGED_IN_KEY',    'X@k$Uv17VUP*^QXvVROr=~ByTqfc}=j=!mZyQe^xL+z2Qahbc)%!s~zk]LK<F=1N' );
define( 'NONCE_KEY',        'fRvJTTF,d|>:.=uc3{}JzY7[KT?(e`T* R5wn/4sEQ5GM/0>a$bp$S.jA8h,SwW^' );
define( 'AUTH_SALT',        'ZY(wv[ hbZFJ/i-|:5i$?c@Lh]18zQ*}JG:Q5{ptTIp0N`xG:ND%^{nHUu4E0f18' );
define( 'SECURE_AUTH_SALT', '1Zi3~)|hL6HXoz2dJNsarZt2EYeZ#|1vmQ?+2!4eu4X-a;b{bmy(Bld]`?uEM; }' );
define( 'LOGGED_IN_SALT',   'X,-)=8G3Nl>:g/j0gB/|JVFX8#lY+z-%#/Z~!VpmEowP/]x~5NSp=1;@2MIsqW6o' );
define( 'NONCE_SALT',       '8hEl5b2vA%+mZJ%,  w%Z:`)b9P_tk)GEDZ7l$pl+{OL[@MXZMq|vzXqrSb$}eG]' );

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
