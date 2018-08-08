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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '6j`n=12U<lOr},qo%Es1-d|k(,V0`TuuIUU;=i]S+=cfyAHrr)2mCq62Z=c-pfIi');
define('SECURE_AUTH_KEY',  '>paB8;YY1r5ZM5o,X5&Vtg2Vvjq$NLQX7lNb<1|+!f)8,)C:^y9n(%{4o8ik%HB}');
define('LOGGED_IN_KEY',    'DAL*@;tRftf4#+&Q7c[eHx]vtT gCj08Xcgbi;+Jur;hl#1>Tjei.,dBn6z[O1Lc');
define('NONCE_KEY',        '=Bza[!PI+ K[9<j;*#>oo#loiOW~UUDhN(3_-EsZg#4]A/Avu<ejYY6UW[V))}TN');
define('AUTH_SALT',        'uH)IsIbZ3a:rNd>TOjLM`weSeE{(Jvv^{^AtUb6D>+@oTad(0fRZMyI2iepjhF%/');
define('SECURE_AUTH_SALT', 'l>+xgF;B4,M30Gaxk[&QgnsXT5?AUis|tZFoC[_cgXUer5%A (xo3%DwD),]+b%T');
define('LOGGED_IN_SALT',   '5 ?HtjEE*eM-rR^0.jAJSk@,D@NW96Jg6-^5eK%FKCE2HhEypPs-2qAhEW~I:@$[');
define('NONCE_SALT',       'R/L2riAB;<PlIu $x)3pb!tqE$RJ[gxLzFI!x&^I:5xPsD ,Lcj&Zi&L8r-RbRrA');

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
