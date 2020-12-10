<?php 

        if(isset($_POST['valider'])) {
            $pseudo = $_POST['pseudo'];
            $ville = $_POST['ville'];

            echo "Je m'appelle " . $pseudo . " et j'habite à " . $ville;

        }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>
<body>
    
    <h1>Bienvenue sur mon formulaire POST</h1>

        <h2>Commencez-donc par vous inscrire :</h2>

            <form name="inscription" method="POST" action="">
            Entrez votre pseudo : <input type="text" name="pseudo"/> 
            Entrez votre ville : <input type="text" name="ville"/>
            <input type="submit" name="valider" value="OK"/>
            </form>

            <?php
    include "fonction.php";
?>

<?php
    menu()
?>

</body>
</html>