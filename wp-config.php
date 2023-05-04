<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7Wj&LN,~aN/wT>{Qhl5sup{X`Cv-Whs?Kz}%pkLnqn>&:tJ*W%Bcm&@bF0eSYMGL' );
define( 'SECURE_AUTH_KEY',  '5,.;-9t&h7!gve.V@hM(#<Z/*&(f;QZFx{-o!ZmDn8<LXofGA)@iF/j#oH nI7K3' );
define( 'LOGGED_IN_KEY',    'sI!di{$6|m]JU})N-8[i-TZ^$cqS8S7MWjdjfp?_#gN+vQSCd;PUf)JRoz9Z]Fd-' );
define( 'NONCE_KEY',        'm_SqBA|~Yb^OzcLitzCUnbJvFp|NCQ9e3htvPpd9|sB-i6;x>o;~QakazV#ex97x' );
define( 'AUTH_SALT',        'a8sU]o?j&vU**xLG/(@;uk7J;R0Gh]g}oEY]N(|$%=|Cpr,WmWLo| +0j|~Fp3v5' );
define( 'SECURE_AUTH_SALT', 'SjThc,Az?1ivl_DI};;]Dq+J#g5y1HrBRnjNi[FCS__j-oO3<m(ypgzd2uz]d6yq' );
define( 'LOGGED_IN_SALT',   '5HC$+;@yH:U=*&6z`x6#n`]D|V{aZqDJfFT:-1]-X8Px5t3&>2+2}ueBxYc:/S4_' );
define( 'NONCE_SALT',       'UvhQbBEq#gwIo@eWrI=uNwWIBZ?q^~Wdm:5VFZ(VBBMRf8Cr?x)[w[4Z}}Iv*[5-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
