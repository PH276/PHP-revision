<?php
if (!empty($_POST)){

    if (strlen($_POST['pseudo']) == 0){
        echo 'Saisissez un pseudo';
    }
    else{
        echo '<pre>';
        var_dump ($_POST);
        echo '</pre>';

        echo 'pseudo : '.$_POST['pseudo'].'<br>';
        echo 'email : '.$_POST['email'].'<br>';
    }
    $f = fopen("liste.txt", "a");
    fwrite($f, $_POST['pseudo']. "-");
    fwrite($f, $_POST['email']. "\n");
    $f = fclose($f);
}
?>
