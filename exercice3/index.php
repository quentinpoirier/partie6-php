<?php
   if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    $message = 'Du ' . $_GET['startDate'] . ' au ' . $_GET['endDate'];
} else {
    $message = 'Il faut renseigner les dates de début et de fin.';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <h1>exercice3</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  
    et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    <a href='index.php?startDate=2/05/2016&endDate=27/11/2016'>url avec date</a><br>
    <a href='index.php'>url sans date</a>
    <div><?= $message ?></div>
    
</body>
</html>