<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projetCoop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/m(R{H-.gS:a{dU~O&kUe~.urh;j0SMwrydR:qa_c).:W*Xoq-3r=I`+1}B!VW/G');
define('SECURE_AUTH_KEY',  'x#[Azo*qI>|b1Z?eAh_CyGLDs>rG#?7{F$PMy;ldHt|^B_p ]14TXA0),|pQ#sRI');
define('LOGGED_IN_KEY',    '-Cp3C[af-rE!)L5LD>(8%OF_r&8/}uc*]Px7a~jF3~tTBu.2#E|ydju=E(MhM_-m');
define('NONCE_KEY',        '[T7BlI|,Sy:SdAHNy%(X+bLF,?<qBm,<GMr2?7Ff[tPY4$l -H4ek5~m(%ob<b&c');
define('AUTH_SALT',        '64`g?#b$%wN^Y.u);@3eB52~?<i(*q9X2R8O`}[Bh)s@n7e17hk2V{->[*rB.8Ng');
define('SECURE_AUTH_SALT', 'U}(Y%x>qRw1&5e*6Q)4aAN6|qHV0tCysZ|CJG[zMF[QU,VOx`NYMwLkI6sex6* 6');
define('LOGGED_IN_SALT',   'eo@7Pm7$JQPDbp7_6;&4JG}~?+3;=J2mV!T]w`< e$6G<]B261wQ.90r{H4aV6);');
define('NONCE_SALT',       'U_)lj6tf}YURZH3*1[UZi{&1^[Ti!!rTmPd$,h{l,w#9JE@0biK619IA9+ObVUhy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');