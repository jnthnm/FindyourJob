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
define('DB_NAME', 'findjob');
/** MySQL database username */
define('DB_USER', 'findjob');
/** MySQL database password */
define('DB_PASSWORD', 'findjob');
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
define('AUTH_KEY',         'PD|U@ojQZD8iu$i#=)1~(kDPJ_sCWk;7ukHE<lS0G1>mj.5ID~BE#W`lj:XeKM5[');
define('SECURE_AUTH_KEY',  'a7#Ta$@tbL* _R&+T0?^#)0!krx@J&-.8F|HPz7Kg@bO;q|K#O=I9e{TXH1-6]R5');
define('LOGGED_IN_KEY',    'S&z7>D^vc`%=7a+lc-y-<BwY -h-Ni./?6=iwqbs+,&} 74.md;=s$kv!ikDO|g?');
define('NONCE_KEY',        'FI8;(|f_^2h(!4@)$Q!7T|E5Q%DGr5]8d8~^OZnycidjezl/?ueT|+<U?{L+<ANf');
define('AUTH_SALT',        'ke{~imC(9.$q,Z#VNkv{I<_%3oi5e. mcpu_^~IJV;*G9&aFfB4qV@OC =`$<-TR');
define('SECURE_AUTH_SALT', 'w,PV2a${TLPAv61;C}O.@^gy+eXAx!0Fla(ei`7f{-p~F3-17^*EY]Dk@%+G1O}@');
define('LOGGED_IN_SALT',   '#r(gQBc&Y-$)5iF)vJc:QO<6s2xM22k}m4rC6{%W04k~ |%hF{,B}(Pw3b}es-Y_');
define('NONCE_SALT',       '+?Si-48}*3*C0FDpeoXY-W1HI}b?lDUn/-lE|T|p~9NS$}* 84X`EtwJ|w},Pp-m');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * Déplacement du répertoire par défaut WP-CONTENT
 *
 * @link https://codex.wordpress.org/fr:Modifier_wp-config.php#D.C3.A9placer_le_R.C3.A9pertoire_wp-content
 */
// Chemin local du répertoire WP-CONTENT (déplacé)
define('WP_CONTENT_DIR', dirname(ABSPATH) . '/content');
// URL complete du répertoire WP-CONTENT (déplacé)
define('WP_CONTENT_URL', 'http://localhost/Find-your-jOb/find-your-job/content');
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
define('WP_DEBUG', true);
// Si je suis en DEV
if (WP_DEBUG) {
  // Je n'enregistre pas les erreurs dans un fichier de log
  define('WP_DEBUG_LOG', false);
  // J'affiche mes erreurs
  define('WP_DEBUG_DISPLAY', true);
  // Je laisse activé l'installation de plugins ou thèmes
  define('DISALLOW_FILE_MODS', false);
  // Force le téléchargement direct dans mon dossier sans FTP etc.
  define('FS_METHOD', 'direct');
  // Je vais limiter le nombre de version d'un contenu
  define('WP_POST_REVISIONS', 3);
// SI je suis en PROD
} else {
  // Je vais enregistrer mes erreurs dans un fichier
  define('WP_DEBUG_LOG', true);
  // Je n'affiche pas mes erreurs
  define('WP_DEBUG_DISPLAY', false);
  // Désactive l'installation de plugins ou thèmes
  define('DISALLOW_FILE_MODS', true);
}
// Bloque l'éditeur embarqué
define('DISALLOW_FILE_EDIT', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
