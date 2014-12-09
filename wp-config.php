<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xkweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']V+@1`&XecBG?L J`E;J=E|x{8/tb2&jhL_pJ,n}>(.yw<2I1+wz/Rt-^M-|>3b ');
define('SECURE_AUTH_KEY',  'Wzu9NDvFIt}}^cf5N.Fq]CVV3;zHWD?RTHwU4:6p+-CoKQ:M__ g|)!N80JlgYpB');
define('LOGGED_IN_KEY',    '9dh!PB;c]e`gdaf6i$43(MsY/WsABf:kA|J5@rzMuJS/,)N{QtY$464T?A79EW;S');
define('NONCE_KEY',        'p1*+YGi,qTIv-!L]#p$h|+$>a$f1|{{/F:1#|YDp6~0Y)`fv|+2HH0v@5=kfmUvo');
define('AUTH_SALT',        '^7~VW^R(D.o?P |0y` jT )DE+65>}?A+eyIa9&:+#Q|+Oj[G>q+ox`JWMBejf/y');
define('SECURE_AUTH_SALT', '{AWe;t/.ARx?oHO8cu1Zse@QjR@vt9JNy}9/X~zzu_VgcXu2P#,x@.5LCx93<SW_');
define('LOGGED_IN_SALT',   ',p=>Nd3L_-=6**`mph1~fF<;%%w-Qvp+1l}EaE0h2J]uEZ[#G7Zimv@eIRydmQT)');
define('NONCE_SALT',       'ZSeS2#T~(_hF}!yD{:STvxgp*em*&A-/Ya]O*sGcAN5OXv>~{HhY%):8%O|aQ-9f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
