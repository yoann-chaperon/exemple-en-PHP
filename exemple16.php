<?php
$numéro = 0;
$nombre = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-2.php</title>
</head>
<body>
<form action="">
        <div>
            indiquer vos 5 compétences principales :</br>

            <?php //boucle PHP
            for ($numéro = 1; $numéro <=$nombre; $numéro++): 
            ?>
            <!--code html-->
            <input type="text" value="<?php echo $numéro;?>" /></br>
            <?php endfor; // fin de la boucle PHP ?>

            <input type="submit" vlue ="ok" /></br>
            </div>
</body>
</html>