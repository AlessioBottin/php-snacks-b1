<?php
//  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
//  che mail contenga un punto e una chiocciola e che age sia un numero. 
//  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

$nameCheck = strlen($name) > 3 ? true : false;
$mailCheck = strpos($mail, '@') !== false ? true : false;
$ageCheck = is_numeric($age) ? true : false;

// var_dump($nameCheck);
// var_dump($mailCheck);
// var_dump($ageCheck);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authenticator</title>
</head>
<body>
    <?php if($nameCheck && $mailCheck && $ageCheck) { ?>
        <div>Accesso Riuscito</div>
    <?php }else { ?>
        <div>Accesso Negato</div>
    <?php } ?>
</body>
</html>