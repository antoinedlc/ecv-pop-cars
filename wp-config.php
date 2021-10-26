<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ecv-pop-cars.local' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '2!~DD5K1*xTm0tGRXK[+./]PKhkw(=ecuO![N?u{8ibWCO4_!DHa9sLwseP?!{O(' );
define( 'SECURE_AUTH_KEY',  'i, <j2cHS0N1LF2?swP9qe&2I=W2E7wuBC+Frg]:gA[yQK;@nJe]{o7S(~P@T,Ui' );
define( 'LOGGED_IN_KEY',    '-W+iB.EU@,.bko<#s,jBUt}}-A(Dju~;c%/#)|U#+*b90[+:^.C vjq(T@%35*l;' );
define( 'NONCE_KEY',        'X&9,,G%a|g}zDe^QhQ)GmVgSF#67M{ uC;%E|p.sMQl`Kd29MSB;9T|tJau0m#*k' );
define( 'AUTH_SALT',        '_Ch#A(5wIt|:Wl/.;Nw>Gi7c,9wKjatTqxz$)#t{2MURN,70BAcsEWY6K@_.YOGh' );
define( 'SECURE_AUTH_SALT', 'unw3NDosT2Gh+ar&q`N``_lleg`ps[wf<;s KqOw_wCV$]}~KGUGDDx,@Sey%_!C' );
define( 'LOGGED_IN_SALT',   'a6K9BdIcM#XRNo%yFTrF6%(@19Qt$-BzLf^{e00mEGv=Kx&Zg-%UVdG^I*?h1<JB' );
define( 'NONCE_SALT',       'o.v2oH^<1lOHsIeE/x+pqS^T_uW-i[)!)Th>=cXvSx1]XDEGB?[9Yg_]S~z`x<.0' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'popcars_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
