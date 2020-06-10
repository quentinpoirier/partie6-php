<?php
   if (isset($_GET['week'])) {
    $message = 'Nous sommes semaine : ' . $_GET['week'] . '.';
} else {
    $message = 'Il faut renseigner le numéro de la semaine.';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
    <h1>exercice5</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>
    <a href='index.php?week=12'>url avec paramètres</a><br>
    <a href='index.php'>url sans paramètre</a><br>
    <div><?= $message ?></div>
    
</body>
</html>