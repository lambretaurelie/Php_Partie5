<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice10</title>
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
            echo 'le numéro '.$key . ' correspond au département ' . $value . '<br />';
        }
        ?>
    </body>
</html>

