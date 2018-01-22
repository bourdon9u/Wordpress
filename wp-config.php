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
define('DB_NAME', 'wp_pt');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'bourdon');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M3a0YVTx;,1lE#@8BaIlq^Y,*ot)!9Hk{M&AG?PziZ/:iRDv?Ej$YjhU-k!te1Va');
define('SECURE_AUTH_KEY',  'J{@UxEuMmX)D!U0+Tb=hAx3=5)a<}4=/(eyF9OUC?*cll{>vKDx9fsf]B#@0.< z');
define('LOGGED_IN_KEY',    'K_`,udT/IdOW[1ZS4)4qN M*qFlr}>QS]|l*=9 uDil#u)Mi6*4;AYQ8/0r3K?[C');
define('NONCE_KEY',        'vjyI~-{`7Z+ZR ?u_h390?27,3 tj9l!& S]j!K1vyHknYZg;E&VEM4RQK1#+Dot');
define('AUTH_SALT',        'qls& )}$?r2(iJ~?0{<lBa&MY=avV2 |lac~B?mDUuPwl[9,V#@WRS,#P-.pa]F%');
define('SECURE_AUTH_SALT', '.QNQGr/]e0z`h g:Lbf9D}J[|>mYX0)<Ky=1gI7Dv),@;J;<);vO{K4q$tjJiE4?');
define('LOGGED_IN_SALT',   '[pyOL,6uT&!bly}^gc~)(&2lTdo3C8U%vwvUOBERLa_L7>h-IXf|xT6KVnB0M@|C');
define('NONCE_SALT',       '>RDi6rS9ugEpOJ2M/rmvuKD>Nhr~m#ulKKP/`<vu!0$gRY5#q8K5A8fPQ=,^~2[M');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');