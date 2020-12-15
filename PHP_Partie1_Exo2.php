<?php
    include "menu.php";
?>

<?php
    menu()
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>

        <?php
            $tableau[5]=0;
            $i;
            $tableau = array(
             'Nom' => "pesant",
             'Prenom' => "valentin",
             'MDP' => "coucou");
             echo "".$tableau['Nom']."";
             echo "".$tableau['Prenom']."";
             echo "".$tableau['MDP']."";

        echo '<table border="1"><tr>';{
        echo "<td>" .$tableau['Nom']. "</td>";
        }
        {
            echo "<td>" .$tableau['Prenom']. "</td>";
            }
        {
            echo "<td>" .$tableau['MDP']. "</td>";
            }
        
        echo "</tr></table>";
        
            highlight_file(__FILE__);
?>
   
</body>
</html>