<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice9</title>
    </head>
    <body>
        <?php
//On créé un tableau avec deux colonnes
        $departement = array(
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas de Calais',
            '80' => 'Somme',
        );
        foreach ($departement as $key => $value) {
            echo $key . ' ' . $value . '<br />';
        }
        ?>
    </body>
</html>
















