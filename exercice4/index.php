<?php
   if (isset($_GET['language']) AND isset($_GET['server'])) {
    $message = 'Ecrit en ' . $_GET['language'] . ' et hébergé sur un server ' . $_GET['server'] . '.';
} else {
    $message = 'Il faut renseigner le langage et le type de server.';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <h1>exercice4</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  
    et les afficher : index.php?language=PHP&server=LAMP</p>
    <a href='index.php?language=PHP&server=LAMP'>url avec paramètres</a><br>
    <a href='index.php'>url sans paramètre</a><br>
    <div><?= $message ?></div>
    
</body>
</html>