<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formul</title>
</head>
<body>
<form method="post" action="">
    <p></p>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= $_SESSION["security"]["nom"]?>">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?= $_SESSION["security"]["prenom"]?>">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" value="<?= $_SESSION["security"]["email"]?>">
    </div>
    <div>
        <label for="pass">Pass :</label>
        <input type="text" id="pass" name="pass" value="">
    </div>

    <input type="submit" value="Valider">
</form>
</body>
</html>