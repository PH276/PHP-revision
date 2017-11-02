<?php
session_start();

$_SESSION['pseudo'] = "pashuit";
$_SESSION['prenom'] = "Pascal";
$_SESSION['nom'] = "HUITOREL";
echo ('<hr>');
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//
// unset($_SESSION['nom']);
// echo ('<hr>');
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
