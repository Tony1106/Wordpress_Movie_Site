<?php

/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define('DB_NAME',     'database_name_here');
define('DB_USER',     'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8mb4');


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         '^}?zn{G)1%=X.,W0a.qQu%lO6nnjK0oU: R%oKIcanIpQcj|2;c&Ymmp1UI5fqLb');
define('SECURE_AUTH_KEY',  'Hb>J)3&nG%x+s?q_A 4b]M)rtv,|BrAP/**87=SS< +$@(Sj+:>E7/cB-k4Cas0I');
define('LOGGED_IN_KEY',    '-k+d=usPiwVV>@n(&vlcO2d># PSTVh} vR: T!%O1%-O+gUtgrsk`Vw+QS+*>9&');
define('NONCE_KEY',        '1=:tfK#Z`zmc&6Gejc1:x1G2%&?oBk:_>H*ZTD[] ERMTev&m&;-Skb3gm,/,#Ef');
define('AUTH_SALT',        '+<d>P--vuXZ40*j9WP?7lONm+>g-FE0E#[:!PVw-e7+v^l*T}j{uP(l{;0eo72DW');
define('SECURE_AUTH_SALT', 'k}kDXwE-+(d(b8N7y-.oej+(@#N=mbG0lt=A1YY&Tb|a,h#KDO&64-2.=#(xrNY&');
define('LOGGED_IN_SALT',   'I$z)wX=$K$s_-R,Xm{|{-TX)Nv6?v^-+~}l<g7 zNr*$X&RbaR`.KkyUEg|sAj`C');
define('NONCE_SALT',       'T(T/$:e0bD){q9B,_Rg#TE_$N5c6Ooe@^Ek~=.+?fi~MFA0sso@~y9XvCY|5$pUO');


/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//Define database key
define('MOVIE_AUTH_KEY', '1e448e0dfcdbb565f5d329820065b4d2');

//Dotenv
require_once(__DIR__ . '/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__ . '/../'))->load();
