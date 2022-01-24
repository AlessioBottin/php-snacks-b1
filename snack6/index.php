<?php 
    // Creare un array contenente qualche alunno di un’ipotetica classe. 
    // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $students = [
        [
            "name" => "Giorgio",
            "lastname" => "Rossi",
            "marks" => [5,8,9,9,4,10]
        ],
        [
            "name" => "Sauro",
            "lastname" => "Verdi",
            "marks" => [5,4,4,9,4,10]
        ],
        [
            "name" => "Marco",
            "lastname" => "Neri",
            "marks" => [5,7,7,9,4,2]
        ],
        [
            "name" => "Luigi",
            "lastname" => "Rossi",
            "marks" => [9,8,9,9,8,10]
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($students); $i++) { ?>
        <?php $thisStudent = $students[$i]; ?>
        <?php $marksAverage = (array_sum($thisStudent["marks"])) / (count($thisStudent["marks"])); ?>
        <div>Studente:</div>
        <div><?php echo $thisStudent["name"] ?></div>
        <div><?php echo $thisStudent["lastname"] ?></div>
        <div><?php echo $marksAverage ?></div>
    <?php } ?>
</body>
</html>