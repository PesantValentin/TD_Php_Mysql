<?php
    include "menu.php";
?>

<?php
    menu()
?>

<?php
        session_start();

    if(isset($_SESSION['nom'])) {
        echo 'Bienvenue sur le site ' . $_SESSION['prenom'] . '' . $_SESSION['nom'];
    } else {
        echo 'Vous n\'êtes pas encore enregistrer sur notre site';
    }
     
    if(isset($_POST['valider'])) {
        $nom = htmlspecialchars($_POST['login']);
        $prenom = htmlspecialchars($_POST['mdp']);
    
        if(!empty($nom) AND !empty($prenom)) {
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            
        }
    }
        if(isset($_POST['viderSession'])) {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>
<body>
    
    <form action="" method="POST">
        <p>login : </p><input type="text" name="login">

        <p>mdp : </p><input type="password" name="mdp">
        <input type="submit" value="Connexion" name="valider">
        <input type="submit" value="Déconnexion" name="viderSession">
    </form>

<?php
    highlight_file(__FILE__);
    ?>

</body>
</html>