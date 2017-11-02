<?php
if (isset($_GET['pays'])){
    $pays = $_GET['pays'];
    $un_an = 365*24*3600;
    setCookie ("pays", $pays, time() + $un_an);
    switch ($pays){
        case 'fr' :
        echo 'le pays choisi est la France';
        break;
        case 'en' :
        echo 'le pays choisi est l\'Angleterre';
        break;
        case 'it' :
        echo 'le pays choisi est l\'Italie';
        break;
        case 'es' :
        echo 'le pays choisi est l\'Espagne';
        break;
        default:
        echo 'Il y a erreur sur le pays choisi';
    }
}
elseif(isset($_COOKIE['pays'])){
    $pays = $_COOKIE['pays'];
}
else{
    $pays = 'fr';
}

?>

<ul>
    <li><a href="?pays=fr">France</a></li>
    <li><a href="?pays=en">Angleterre</a></li>
    <li><a href="?pays=es">Espagne</a></li>
    <li><a href="?pays=it">Italie</a></li>
</ul>
<?php



?>
