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
    <link rel="stylesheet" href="stylePHP.css">
    <title>exo1</title>
</head>
<body>

    <?php
        $NombreAleatoire = rand (0,100);
        
            if ($NombreAleatoire%2 == 1)
                echo '<div class=impair>'.$NombreAleatoire.' est impair</div>';
            else
                echo '<div class=pair>'.$NombreAleatoire.' est pair</div>';


    highlight_file(__FILE__);
    
    ?>
 
</body>
</html>