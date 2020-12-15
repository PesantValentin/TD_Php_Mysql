<?php
    include "menu.php";
?>

<?php
    menu()
?>

<?php 

        if(isset($_GET['valider'])) {
            $pseudo = $_GET['pseudo'];
            $ville = $_GET['ville'];

            echo "Je m'appelle " . $pseudo . " et j'habite à " . $ville;

        }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>
<body>
    
    <h1>Bienvenue sur mon formulaire POST</h1>

        <h2>Commencez-donc par vous inscrire :</h2>

            <form name="inscription" method="GET" action="">
            Entrez votre pseudo : <input type="text" name="pseudo"/> 
            Entrez votre ville : <input type="text" name="ville"/>
            <input type="submit" name="valider" value="OK"/>
            </form>

<?php
    highlight_file(__FILE__);
    ?>

</body>
</html>