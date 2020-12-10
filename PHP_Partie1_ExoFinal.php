<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exofinal</title>
</head>
<body>
    
<form action="" method="POST">
        <p>login : </p><input type="text" name="login">

        <p>mdp : </p><input type="password" name="mdp">
        <input type="submit" value="Connexion" name="valider">
        
    </form>

    <?php
    include "fonction.php";
?>

<?php
    menu()
?>

</body>
</html>