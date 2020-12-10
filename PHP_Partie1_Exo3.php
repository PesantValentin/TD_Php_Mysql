<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>
<body>

    <?php
    $tableau=0;
    $i;
    $tableau = array(
    array(
     'Nom' => "pesant",
     'Prenom' => "valentin",
     'MDP' => "coucou"),
     array(
     'Nom' => "pesant2",
     'Prenom' => "valentin2",
     'MDP' => "coucou2"),
     array(
     'Nom' => "pesant3",
     'Prenom' => "valentin3",
     'MDP' => "coucou3"));
     

     for($i=0;$i<3;$i++){
        echo "".$tableau[$i]['Nom']." ";
        echo "".$tableau[$i]['Prenom']." ";
        echo "".$tableau[$i]['MDP']." ";
     }
 

    echo "</tr></table>";

    highlight_file(__FILE__);



?>

<?php
    include "fonction.php";
?>

<?php
    menu()
?>
    
</body>
</html>