<?php
/** 
 * WordPressin perusasetukset.
 *
 * T+ñm+ñ tiedosto sis+ñlt+ñ+ñ seuraavat asetukset: MySQL-asetukset, Tietokantataulun etuliite,
 * henkil+¦kohtaiset salausavaimet (Secret Keys), WordPressin kieli, ja ABSPATH. L+¦yd+ñt lis+ñtietoja
 * Codex-sivulta {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php}. Saat MySQL-asetukset palveluntarjoajaltasi.
 *
 * Automaattinen wp-config.php-tiedoston luontity+¦kalu k+ñytt+ñ+ñ t+ñt+ñ tiedostoa
 * asennuksen yhteydess+ñ. Sinun ei tarvitse k+ñytt+ñ+ñ web-asennusta, vaan voit 
 * tallentaa t+ñm+ñn tiedoston nimell+ñ "wp-config.php" ja muokata allaolevia arvoja.
 *
 * @package WordPress
 */

// ** MySQL asetukset - Saat n+ñm+ñ tiedot palveluntarjoajaltasi ** //
/** WordPressin k+ñytt+ñm+ñn tietokannan nimi */
define('DB_NAME', 'wordpress');

/** MySQL-tietokannan k+ñytt+ñj+ñtunnus */
define('DB_USER', 'root');

/** MySQL-tietokannan salasana */
define('DB_PASSWORD', '');

/** MySQL-palvelin */
define('DB_HOST', 'localhost');

/** Tietokantatauluissa k+ñytett+ñv+ñ merkist+¦. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. +äl+ñ muuta t+ñt+ñ jos et ole varma. */
//define('DB_COLLATE', 'utf8_swedish_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Muuta n+ñm+ñ omiksi uniikeiksi lauseiksi!
 * Voit luoda n+ñm+ñ k+ñytt+ñm+ñll+ñ {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org palvelua}
 * Voit muuttaa n+ñm+ñ koska tahansa. Kaikki k+ñytt+ñj+ñt joutuvat silloin kirjautumaan uudestaan.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dil<[}|RuEdGrcGbwomE&kf0:Q]Qi8WcA4-K;2CtMh*s#RGfX^:d5KKmT6pD(~Mf');
define('SECURE_AUTH_KEY',  'u+]>HK%x;_0K-zk6)z)[V{bhqj]?r_QOp7?| A&^1Jk4IV,0p=cQV:F65G(|Q0ct');
define('LOGGED_IN_KEY',    'g5tQobGn0W8[y4aJ)LtiO)SX89OD3hegTvnJCiuyI(|d|KC6sHMfxJ-o7P^e_?CA');
define('NONCE_KEY',        'o,5~kdXk#8NCj[Z[T9$_h9GmH9LR%s%k8O2_IrVXEI^(= 332f#)T:KPiv|.a#ur');
define('AUTH_SALT',        '/^4kCZep+~V*T5Cq2cPIaG1-eLxE,pIlBXC8ma11oF+R0R3$!H+{)Qe4>]68Do|v');
define('SECURE_AUTH_SALT', 'u}pG(dGyw z([a{o[#|-p w J+-LU#D323mv@<D~j4!XPxs=jR?&59(8#|b]|D3+');
define('LOGGED_IN_SALT',   '0|WaF]x#WGZZ_is.!>ddVAqX9N{`|RZ*SdbR|NxE|yqBl{QoNR8}D?#.5s_,xOD#');
define('NONCE_SALT',       '| r!s,VF4&wTstySxrlL[cCx:]Ku:8iBW--2UE`+7)YYtaxn.r|`/4+ZhL5Zp!3+');
/**#@-*/

/**
 * WordPressin tietokantataulujen etuliite (Table Prefix).
 *
 * Samassa tietokannassa voi olla useampi WordPress-asennus, jos annat jokaiselle
 * eri tietokantataulujen etuliitteen. Sallittuja merkkej+ñ ovat numerot, kirjaimet
 * ja alaviiva _.
 *
 */
$table_prefix  = 'wp_';

/**
 * Kehitt+ñjille: WordPressin debug-moodi.
 *
 * Muuta t+ñm+ñn arvoksi true jos haluat n+ñhd+ñ kehityksen ajan debug-ilmoitukset
 * T+ñm+ñ on eritt+ñin suositeltavaa lis+ñosien ja teemojen kehitt+ñjille.
 */
define('WP_DEBUG', false);

/* Siin+ñ kaikki, +ñl+ñ jatka pidemm+ñlle! */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
