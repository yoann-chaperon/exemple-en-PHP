<?php
    print_r($_POST);
    echo '<br>';
    $_POST['name'] ="Yoann";
    $_POST['passwd'] ="p@lo_-_8%";
?>
<?php
        if ($_POST['name']=='' )
            echo 'Veuillez saisir un nom<br>';
        else
            echo 'saisie du nom correct<br>';
    
        if ($_POST['passwd']=='' )
        echo 'veuillez sasir un mot de pass<br>';
    else
        echo 'saisie du mot de passe correct<br>'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaired'authentification</title>
</head>
<body>
<div>
    <form action="#" method="post">
    </div>
    <div>
    <label for="name">Nom :</label>
    <input type="text" value="<?php echo $_POST['name'];?>" name="name">
    </div>
    <div>
    <label for="passwd">mot de passe :</label>
    <input type="password" value="<?php echo $_POST['passwd'];?>" name="passwd">
    </div>
    <div class="button">
    <input type="submit" value="envoyer">
    </div>
</body>
</html>