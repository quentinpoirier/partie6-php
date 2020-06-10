<?php
   if (isset($_GET['age'])) {
    $message = 'Vous avez ' . $_GET['age'] . ' ans.';
} else {
    $message = 'Il faut renseigner un age';
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher 
    sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
    <a href='index.php?lastname=Nemare&firstname=Jean&age=32'>url avec âge</a><br>
    <a href='index.php?lastname=Nemare&firstname=Jean'>url sans âge</a><br>
    <a href='index.php'>url sans âge</a>
    <div><?= $message ?></div>
    
</body>
</html>