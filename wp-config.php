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
define('DB_NAME', 'ustcaas');
/** MySQL database username */
define('DB_USER', 'adminqFzYm6N');
/** MySQL database password */
define('DB_PASSWORD', 'RtEcNDsYan_B');
/** MySQL hostname */
define('DB_HOST', 'mysql.ustcaas.svc');
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
define('AUTH_KEY',         '1.I09Dgre1+Hw7~:/giujP^A)c$6w6,e}+(}v0RH+R?sAN~!L#7]&/Fr/!w4^3t?');
define('SECURE_AUTH_KEY',  '+%mPlmIv,Vrx0 ){Cat6 aoHrH$ANM+|s_vwcNeXK/9A,!gmC!#f3-UT-;cE_Dh#');
define('LOGGED_IN_KEY',    's0Q3LboH(i:U~1OFGv[P*J;0}hmtH%[eoPccM-d AcfR2N%q}mz9<s0%*onT@/aU');
define('NONCE_KEY',        ' 8:wTbkiFEz=c$M{*+K}QEZ8-v{1E{h]x$S4q0Hj( i2Pi2TH09/YC<C+3{Ku ~C');
define('AUTH_SALT',        ')Ransvc]`^Y~A<+Jd}e{!v*s|+4XaC`I5<8+Fx#;y ~,`Js|/VV3g4jKJq8xW[$d');
define('SECURE_AUTH_SALT', '8Heza=PWE}M#|XuWeNI2+),Qtz1FMty[3Z.PUZi~pV%%tWz~@tD|{W33[Z(K9}4W');
define('LOGGED_IN_SALT',   '8l-EQLa<U:*Q3@S|TQl+KS~cF`$5gfS&?_Pao7r9ee4jm6oLaqO;H#dUFQ]_(;%b');
define('NONCE_SALT',       'LK)M9<onCqfYqc#)N{O&{O9<)I_U4Id=q:UL)j6o)8VB|~g3&vq3`3D}t<FzmjRR');
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

