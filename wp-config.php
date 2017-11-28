<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'sunride');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'SiSO.(tdd}D@M.mqu4`UJPeH0jFbw.C;VY;9CxVwy(`N_FpVbP801XbT8&Y;)fG!');
define('SECURE_AUTH_KEY', 'pq9mptaV6TF&VaqX^Kzw,K:7 +Z-o22Sv^N~mvG^+bY%ub?[@n|lb lHv.ro5Ljx');
define('LOGGED_IN_KEY', 'M{({v/>3In<}MCz]@7n$|J?{@+<}Zr}jjPnEr_ab[tl&.:2VRVu+~2e#rt4ZV.fF');
define('NONCE_KEY', 'dgv`mus[>Ue@@7J#0(yLVPCL|/yw9cMi[miVbo#g-;^}[,zJl8)R% ,N[n(V@{[P');
define('AUTH_SALT', '=6%pDmGpkT-RxKLj3.:x&6i3mfj;uIvLZAAhZ]7Q0)]2Hp>=(+OlDHNJX#JwVCsi');
define('SECURE_AUTH_SALT', 'r:$Av.j9^VU:~/tyCAS^-LbmpTLKa2>?THXIz[ekncL>YwClq%YT#}Q/dq.l2*#+');
define('LOGGED_IN_SALT', 'QsR{G9+WZvBZ_hUyB,o2<B+y+@,=t^vdqVak5.{2mL.<xjr}7L%H*u$_gtA5EoZ]');
define('NONCE_SALT', 'TOF*$^1.G.[Urn+FH<S)Ox:p&=gQ%(}<0D@bmh&{!^#VmU~ nB=S3PQ=J^mtHTN5');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/sunride/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

