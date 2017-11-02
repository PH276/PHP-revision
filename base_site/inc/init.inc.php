<?php

// --------------------CONNEXION A LA BDD-----------------------------------------
$mysqli = new Mysqli('localhost', 'root', '', 'base_site');
if ($mysqli->connect_error) die ('Un problème est survenu lors de la connecxion à la BDD : ' . $mysqli->connect_error);
$mysqli->set_charset("utf8");

// ----------------------- SESSION --------------------------------------
session_start();
// ----------------------- CHEMEN --------------------------------------
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/php-revision/base_site/');
define("URL", "http://localhost/php-revision/base_site/");
// echo RACINE_SITE.'<hr>';
// echo URL;

// ----------------------- Autres VARIABLES  --------------------------------------
$contenu = "";

// ----------------------- Autres INVUSION  --------------------------------------
require_once ("fonctions.inc.php");
