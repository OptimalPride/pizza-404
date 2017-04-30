<?php 

$pdo = new PDO("mysql:host=localhost;dbname=orbital_express", "root", "");

session_start();

$msg = "";

define('RACINE_SITE', '/orbital_express/');
define('RACINE_SERVEUR', $_SERVER['DOCUMENT_ROOT']);

require_once('fonctions.inc.php');

?>