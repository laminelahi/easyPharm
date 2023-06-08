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
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@:jzqydAD4TIDfh!H=f96`_?8-K.SOJ%T)K}Kp6,;?J.}*Dy[D}Oin?,r9#3Ku{y' );
define( 'SECURE_AUTH_KEY',  'TZz$hL)>1ruCiG@-tWgsWN*(P%rRm.!C`0FJu~CI4pW_>!:Mo9Rl&xrFh+!%Vyx!' );
define( 'LOGGED_IN_KEY',    'JutD;mJMRnUCalT#PD4*-XHJ/_p&Z<%4)kFsuRCbkv}noj-%D20Kmv+vPt$mV@_w' );
define( 'NONCE_KEY',        '%D4TmkJ|.{}%f#g|y*J$x@raF*e2Ut|`}( (g2tnq$h]jlV_e4dy3XMXR{4?su v' );
define( 'AUTH_SALT',        'vj~[~aL]/XE3WBN@,F8bo?BY=|n3?otS2%>ht& mgZ0$9!A.yA4-UZ58nwE.{ihc' );
define( 'SECURE_AUTH_SALT', 'eA-|C[X%[)W@&EyRh$*y<;/B#JH`=~aq (|A8hVzfCkrgA6h,VuiS*XQ]hYi,Fwp' );
define( 'LOGGED_IN_SALT',   'Z83b!VRYJ4[xJ8n-4@tEJ|<<a_4:OGfcm.K#3?b^6L$9:)QT`s>&t$jm4kdN.kcU' );
define( 'NONCE_SALT',       '$t/+jt;jC/aGo.& |/LuoMvv%SUd~ChWJ;4Vd7`Ry~3RT`z@^|xJ{Y!TF?T1_TFa' );
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
