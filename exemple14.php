<?php
//initialiser 2 variables.
$numéro = 0;
$nombre = 15;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While_1.php</title>
</head>
<body>
    <form action="">
        <div>
            indiquer vos 5 compétences principales :</br>

            <?php while ($numéro++ < $nombre) : //boucle PHP ?>
                <!-- Code HTML-->
                <input type="text" /></br>
            <?php endwhile; //fin de la boucle ?>

                <input type="submit" value = "ok" /></br>
        </div>
</body>
</html>