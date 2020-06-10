<?php
   if (isset($_GET['building']) && isset($_GET['room'])) {
    $message = 'Bâtiment ' . $_GET['building'] . ', chambre ' . $_GET['room'] . '<br>';
} else {
    $message = 'Il faut renseigner le bâtiment et le numéro de la chambre.';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    <h1>exercice6</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  
    et les afficher : index.php?building=12&room=101</p>
    <a href='index.php?building=12&room=101'>url avec paramètres</a><br>
    <a href='index.php'>url sans paramètre</a><br>
    <div><?= $message ?></div>
    
</body>
</html>