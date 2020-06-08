<?php
    $result ="";
    $hautDeFrance = array(2=>"Aisne", 59=>"Nord", 60=>"Oise", 62=>"Pas-de-Calais", 80=>"Somme");
    foreach ($hautDeFrance as $number => $name) {
        $result .= "le departement <b>" . $name . "</b> a le numéro <b>" . $number . "</b><br>";
    }
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo10</title>
</head>

<body>
    <h1>Exercice 10</h1>

    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. <br>
        Cela pourra être, par exemple, de la forme :<br>
        Le département + <b>nom du département</b> + a le numéro + <b>numéro du département</b></p>


    <p>===================================</p>

    <p><?= $result ?> </p>


</body>

</html>