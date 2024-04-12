<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Utilisateur test php</title>
</head>
<body>

    <form action="formulaire.php" method="post">
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="nom_utilisateur" name="nomUtilisateur" required>
        <button type="submit" name="submit">Envoyer</button>
    </form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    echo 'Bonjour '.$_POST['nomUtilisateur'];
}

?>
