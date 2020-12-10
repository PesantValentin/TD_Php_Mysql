<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>
<body>

    <?php
    $A=-48;
    $B=4;
    $C=74;
    $D=($B*$B)-(4*$A*$C);

        if($D==0)
        {
            $x=-$B/2*$A;
            echo ("l'équation admet 1 solution".$x);
        }
        elseif($D<0){
            echo ("l'équation n'a pas de solution dans R");

        }else{
            $x=(-$B-sqrt($D))/(2*$A);
            $x1=(-$B+sqrt($D))/(2*$A);
            echo ("l'équation admet 2 solutions".$x.$x1);

        }
            
            
             
    ?>

<?php
    include "fonction.php";
?>

<?php
    menu()
?>
    
</body>
</html>