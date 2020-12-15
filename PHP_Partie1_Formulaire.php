<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MON FORMULAIRE</h1>

    <form action="formulaire.php" method="get">
        <label for="name">Mon texte</label>
        <input type="text" id="name" name="name">
        <imput type="submit1">

</form>

    <?php
        if(isset($_GET["name"])){
            echo "Ma valeur est:" $_GET("name");
        
        }else{
            echo "le formulaire existe pas";
        }
?> 

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