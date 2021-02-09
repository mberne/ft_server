<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp_root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ';*-]$-#$>)9F8_a(j%bz}vAxSWQ(4*(P{5R/dzNf(UHO*<6217QVpv)~|%FKp/wb' );
define( 'SECURE_AUTH_KEY',  '3t[uy=i4aqPpf?r^kn8g}`5pC8} Q_6K!cS4C`M16-+;#vpjKR>^H|7#b-fdetV$' );
define( 'LOGGED_IN_KEY',    '#=ib!WFiwJ;9Q ^[NU57|o.?t^zTZ B=Zp_])$v{bl+3rQc`V`_@ShnP)Yk?io;~' );
define( 'NONCE_KEY',        'KArgXe4JQ5Fry<_mNAVpS$/*|-D.ukvqfh-~ln?M&#4B(P{ZqQY.4$4h;qvm:]R]' );
define( 'AUTH_SALT',        'w,Hz5qGpoo/z&dO?7BjqGe{pBk~2QX@}32-S<wZ&6 w#9VFo7@hWdVGtOq#L9e-<' );
define( 'SECURE_AUTH_SALT', 'ODk#?J-s$Fo(rW_mf/=F3|rzF?Qsd04k**tCff|+QpdAf-KS| )~e=@v>)ehOv[O' );
define( 'LOGGED_IN_SALT',   'Vxyx)G|7RPW9Z1I?YP1JHEW1RaW|Au*Q}:1Qiap@?gjE+G8+Tpe@*,q}y)E/gNHn' );
define( 'NONCE_SALT',       'SW@Xd^|cTOb<+#3aMrPj/+F-N#~GDyyFBdDK0:|c0V2k,}S&Rh-=73w|09P3-%t&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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