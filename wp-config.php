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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'epitech_playground' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oT6s)uJfl46b@GmgH-t~!QxtJ4[owMZH%au71zWS*XK6>lz8iA&OiB]mTM;,%j~|' );
define( 'SECURE_AUTH_KEY',  'SVPF,O`E*xTDr]aFrl@8a_lWEUS`ZB<6-#!Uh3Mr!HPD*Ze#?=b/F,Ce$qR!{9(s' );
define( 'LOGGED_IN_KEY',    'Ro4A!~qalYl:!8{sA={4wo}?3vi nWFP6()>k/T<WcV0[qw*bX|8$@eW:+(H@Hvv' );
define( 'NONCE_KEY',        '+;uU(03FpDJogU)HB?e.9hi>|V?Q&4j@x&SZ*C%j}1LtqQ+Q|_w,E~* B|n_jN7m' );
define( 'AUTH_SALT',        '*XLg:IpH9dB/d@IwjD-A+QJ=F!O,lu{8>H[OdodK/D`&N<O}/FtD<O@RVO*N[~]5' );
define( 'SECURE_AUTH_SALT', '5BpO|JtxY23|gB0~yuPTESD%SX`f0r$],[VhqM1LYr15?sZ<Yo!W{5tujX+^(` g' );
define( 'LOGGED_IN_SALT',   'ueWg>r&TA*ELUSp#134+[+hV>,#h l9q^4mXzy#1AAv6mYrW)gwt-zgqX($8cfXi' );
define( 'NONCE_SALT',       'fz(>X]cGMa|YvF8=j*gx.gy&is5628dRA*^/l`Z[2s1h^@PcaEK%-(avJW#D]t%s' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
