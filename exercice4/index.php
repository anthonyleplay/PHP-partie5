<?php
$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
   

    <p>===================================</p>

    <p><?php
        $months[7] = "aôut";
        echo $months[7]; ?> </p>


</body>

</html>