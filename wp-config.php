<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'findyourjob');
/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'findyourjob');
/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'findyourjob');
/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '92.243.2.92');
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' ?$4o-I?|U#9a*Y0i]hy{qhgVJ*,(mZ|N<d-{0C!*XrrclP?089+@XR]m9h9glLQ');
define('SECURE_AUTH_KEY',  'EaRY^:=U7#G/Av+@3htJ8@g}b]Jg.OhtYA?by^eHF)x3FqK3/btN~!p8skb+glSC');
define('LOGGED_IN_KEY',    '7~Rq$@rdA-nrDK&R{,1|n|3I-7|(HKZ|U)rQH;xo33-TSo@(RPhT{>BYi<wXA5Qj');
define('NONCE_KEY',        'gg9mRj%U7)E5.j.uh-+Gm^(Dn_4t%XBc&4#UXT;n+B>$m#!<-[2&d.i4R6t}-UO#');
define('AUTH_SALT',        'mkpJ A!CUDl^,!e|rde(,SnQ].{H`Ex|;Kn91?ps%|J}9a}H7!|8m0OxI;[v^Alr');
define('SECURE_AUTH_SALT', 'c4z.!B_%2n|u<--N4H2v{_=OZ~ l}XFW_>`#0M{?]XeRVWFIIR-94[Pb(L(;y1Cp');
define('LOGGED_IN_SALT',   'P<n1VR|X4X7E3-h^8|8WE7(|lue?M6^MNN%rfXy=A!:+mg^3.2PDyL(Y8~YeSuVh');
define('NONCE_SALT',       '/mx#Di9]l8hxoFPR`3<m-+5seT&#w|;/YDi$<WOS3BY|nvUY5-Ow W<@d(!=oBD3');
/**#@-*/
/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';
/**
* Déplacement du repertoire par défaut WP_CONTENT
*/
// Chemin local du repertoire WP_CONTENT déplacé
define('WP_CONTENT_DIR', dirname(ABSPATH) . '/content');
// URL complete du répertoire WP_CONTENT
define('WP_CONTENT_URL', 'http://localhost/Find-your-jOb/content');
/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
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



/* C’est tout, ne touchez pas à ce qui suit ! */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
