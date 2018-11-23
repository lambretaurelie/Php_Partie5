<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
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





