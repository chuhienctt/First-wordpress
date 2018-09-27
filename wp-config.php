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
define('DB_NAME', 'wp_myphamonline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'aLpP(6Lw~gq=;kIV;Mo]^g/5x-a6OG,HYMJ6KSk:k!ZhG;6xRzBZK+=vo`{ap2!X');
define('SECURE_AUTH_KEY',  'v3|<&62n34EymOi/#rBNinJ31^y}%`PAu]R_E{Csi1#aevvwRDW%ZoiRWR<:3ITg');
define('LOGGED_IN_KEY',    'JEI:QIqWp,^.VoE6uADc(]EfhLKb)d{w#a@xOreHR7/(|J$d^6c=V1+dc9?,fee[');
define('NONCE_KEY',        'r*UEN?_/wnpW50^B^gbXUUQ?wP?Fvkab}|bIrr|DAkH,s{ZF}2XstS052`(as(^L');
define('AUTH_SALT',        '$`~GUCzG3LST*ukFuHF@NzN?z3Dr;p[Pf)D*BGow@!S34+!4l#)w$81~sY3iySYy');
define('SECURE_AUTH_SALT', 'GO7&KYv7Yj;fKvMlxXJ&7A*+3|[f]Vw2K;V@[Jkhz1&7$LN/AkDM@AGfV-{,L9:%');
define('LOGGED_IN_SALT',   'C2P(9^QF!Uak~s[#V]7txsne[rmvk}n&i]<d[aVZr:c>;FY,sSJ}Jz-n`V6X(Q{P');
define('NONCE_SALT',       'jJc=eK98:8,dF$,ulK8%yeFPCxc;{Ri(?d(KmvxRL>aQCZH,gYIm/8qvnXhyQ=3K');

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
