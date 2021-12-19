<?php 
$langue = 'sp';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch_1</title>
    <style>
        .en {font-weight: bold; color: green;}
        .sp {font-weight: bold; color: orange;}
        .fr {font-weight: bold; color:blue;}
        .inconnu {font-weight: bold; color: red;}
    </style>
</head>
<body>
    <div>
    <?php switch ($langue) :
        case 'en':
            ?>
            Hello <span class="en">my friend</span>!</br>
            <?php  break;  ?>

        <?php case 'sp' : ?>
        ¡Buenos dias <span class="sp">amigo</span>!</br>
        <?php  break; ?>

            <?php case 'fr' : ?>
                Salut <span class="fr">mon pote</span>!</br>
            <?php  break;  ?>

        <?php default : ?>
        <span class="inconnu">???????</span>
            <?php break; ?>
            <?php endswitch; ?>    
    </div>
    <div>
        <?php
        $i=5; 
            while ($i>0) {
                $i=$i-1;
            }
            ?>
    </div>
</body>
</html>