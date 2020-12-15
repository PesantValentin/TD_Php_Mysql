<?php

try {

    $maBase=new PDO('mysql:host=localhost; dbname=pesantexo2; charset=utf8;','root','root');
    $requetePatient = $maBase->query("SELECT * FROM patient");
    
    while($patient=$requetePatient->fetch()){
        echo $patient['idSS'] . " " . $patient['nom'] . " " . $patient['prenom'];
    }
    
} catch (Exception $e) {
    echo "problème de connexion";
    
}

highlight_file(__FILE__);

?>

<?php
    include "menu.php";
?>

<?php
    menu()
?>