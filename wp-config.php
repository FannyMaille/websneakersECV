<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'DB_NAME', 'leclosdekuserws' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'leclosdekuserws' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Spo35ecJNn8' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'leclosdekuserws.mysql.db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ' :zdZRXb0y6KKjX5GsK#o6s}Pl,E1V{F*6;b43tXbDU3y)F.5/u3r%6lMnzE9nbK' );
define( 'SECURE_AUTH_KEY',  '$X}->E[hn9 z.^qwjrcX7>LeK9%-XM N+%DEDf#cJGM4urWqMpGL`Jh_Erb.r)/r' );
define( 'LOGGED_IN_KEY',    ']3+NjnA{@|K~o=$0H-n)r>}HvPn@BD`rA18B8kREiv(E:ag7fD{!d9@80oa(x$u|' );
define( 'NONCE_KEY',        'iUyTCbn%_} ]z!;NBE>rDYZI@<wnz8^l6_L5^7%Zh;bTC/O`>2Q4dd?GPX<1U+R|' );
define( 'AUTH_SALT',        'ej_|O``ae)d3;.fZwj!m*;^x}IM-MTs$nV<`F+;}AxK]AU9Ry1eiylM{b/[M[o4k' );
define( 'SECURE_AUTH_SALT', '~Hm0k|%CJsH};}Ke[@z}Ke+KN~S{s%YGCT`)4RhVy_oSS2m<nRo*k:r:9Sy5mXmE' );
define( 'LOGGED_IN_SALT',   'eXNsxyuV:BvqPa*LPKPQPWw xa[I}G0qX*Gr1@O8bE37dz{VA)W&^jBXpqK4Inz^' );
define( 'NONCE_SALT',       'bfI@`<l4x%d}hR9.G?]{IxzW/SU-5*V0OhgHe!w`FkZ_aC]>0:<3J_D,m)wr#2!n' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ecv_fannymaille_';

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
