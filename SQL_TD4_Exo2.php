<?php
    include "menu.php";
?>

<?php
    menu()
?>

<?php

try {
    
    $maBase=new PDO('mysql:host=localhost; dbname=pesantexo2; charset=utf8;','root','root');
    afficher_requet_select($marequete);


} catch (Exception $e) {
    echo "problème de connexion";

highlight_file(__FILE__);

?>