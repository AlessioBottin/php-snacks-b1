<?php
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            "homeTeam" => "Milano",
            "guestTeam" => "Cantu",
            "homeTeamPoints" => "55",
            "guestTeamPoints" => "60"
        ],
        [
            "homeTeam" => "Ascoli",
            "guestTeam" => "Pesaro",
            "homeTeamPoints" => "30",
            "guestTeamPoints" => "80"
        ],
        [
            "homeTeam" => "Roma",
            "guestTeam" => "Napoli",
            "homeTeamPoints" => "70",
            "guestTeamPoints" => "60"
        ],
        [
            "homeTeam" => "Venezia",
            "guestTeam" => "Bari",
            "homeTeamPoints" => "20",
            "guestTeamPoints" => "35"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today Matches</title>
</head>
<body>
    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $thisMatch = $matches[$i]; ?>
        <div>
            <span>
                <?php echo $thisMatch["homeTeam"] ?>
            </span>
            -
            <span>
                <?php echo $thisMatch["guestTeam"] ?>
            </span>
            |
            <span>
                <?php echo $thisMatch["homeTeamPoints"] ?>
            </span>
            -
            <span>
                <?php echo $thisMatch["guestTeamPoints"] ?>
            </span>
        </div>

    <?php } ?>
</body>
</html>