<?php //nos variables
$age_du_visiteur='39';
$nom_du_visiteur='Yoann';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceci est une page de test avec des balises PHP</title>
</head>
<body>
    <h2>Mon profile</h2>
    <p>Coordonnées du visiteur</p>
    <p>
    <?php //Afficher les variables ?>
    <?php echo "Age: ".$age_du_visiteur." ans" ?><br />
    <?php echo "Nom: ".$nom_du_visiteur ?><br />
    </p>
    <p><?php echo "Salut ".$nom_du_visiteur ?></p>
    <p><?php echo "Le visiteur a $age_du_visiteur ans" ?></p>
</body>
</html>