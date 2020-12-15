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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        <p>login : </p><input type="text" name="login">

        <p>mdp : </p><input type="password" name="mdp">
        <input type="submit" value="Connexion" name="valider">
    </form>


<?php
    include "menu.php";
?>

<?php
    menu()
?>

<?php
    highlight_file(__FILE__);
    ?>

</body>
</html>