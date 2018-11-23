<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Créer un tableau months et l'initialiser avec les valeurs suivantes :

    janvier
    février
    mars
    avril
    mai
    juin
    juillet
    aout
    septembre
    octobre
    novembre
    décembre
Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.-->
<!-- La fonction array permet de créer un tableau-->
<?php
$months[0] = 'janvier'; // Créer le premier mois[0]
$months[1] = 'février'; // Créer le 2eme mois[0]
$months[2] = 'mars'; // Créer le 3eme mois[0]
$months[3] = 'avril'; // etc
$months[4] = 'mai';
$months[5] = 'juin';
$months[6] = 'juillet';
$months[7] = 'aout';
$months[8] = 'septembre';
$months[9] = 'octobre';
$months[10] = 'novembre';
$months[11] = 'decembre';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <div><?= $months[2]; ?></div>
    </body>
</html>



