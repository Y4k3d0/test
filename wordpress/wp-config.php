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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':IQc)r/j9%vx%%(_qz}JeBdUiSCu0LzBs1$.48FgTk8c:^M3MhQ49&&pS)I5YIOw');
define('SECURE_AUTH_KEY',  'y}K]g8l#~}9[ {^GfarjS9AXVu}KVQ1|[nud0A&N|;ZzIo[3Glga{sHr&*$2JRJa');
define('LOGGED_IN_KEY',    'i_Gx4[-J=WbK;_KpDddP{FZ@j@:BIz?eAH(t-_;N?Kl[G%*jfu.r2OrRz/G<HPTd');
define('NONCE_KEY',        'b<n pE@B5;X(*)OItV2j>mA=aqKBHNdlqTNmp5+t)XPuH~_oL3,=Cpn~wtwJGz#D');
define('AUTH_SALT',        'g7rW,*<g[{%[h);Wm!k^f!HitH8hTz_!!q-57.p.qW9P.:Q$~+Jw-p.(vOV@wHr/');
define('SECURE_AUTH_SALT', ')EZ+)mlHF|hl3uquvD,l$9{uBp=*E<v=B/k~)hjs&:!K/X>58ic[p~vC70y;06CH');
define('LOGGED_IN_SALT',   'iBf(#2~Q0e ^6H1Q]:xn@8+@L9N,36)y40u?FCt~z1_3{~:>Sxs!:lk/Sl0!V}$$');
define('NONCE_SALT',       'w8See;r /$wXX,Rn4aBkqr+U!fa>fZmDfMAwi+ jZimArbesN%kcwym2F_$b&i4s');
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
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');