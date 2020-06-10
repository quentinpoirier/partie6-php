<?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
        $message = 'Salut ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
    } else {
        $message = 'Il faut renseigner un prénom et un nom';
    }
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : 
     index.php?lastname=Nemare&firstname=Jean</p>
    <a href='index.php?lastname=Nemare&firstname=Jean'>test url</a>
    <div><?= $message ?></div>
    
</body>
</html>