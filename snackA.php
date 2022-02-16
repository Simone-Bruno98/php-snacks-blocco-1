<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK A</title>
</head>
<body>

<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla
// squadra di casa e punti fatti dalla squadra ospite.
    $arraypartite = [
        [   // prima partita
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Cantù",
            "puntiSquadraCasa" => "55",
            "puntiSquadraOspite" => "60",
        ],
        [   // seconda partita
            "squadraCasa" => "Virtus Bologna",
            "squadraOspite" => "Varese",
            "puntiSquadraCasa" => "32",
            "puntiSquadraOspite" => "60",
        ],
        [   // terza partita
            "squadraCasa" => "Stella Azzurra",
            "squadraOspite" => "Dinamo Sassari",
            "puntiSquadraCasa" => "60",
            "puntiSquadraOspite" => "32",
        ],
        [   // quarta partita
            "squadraCasa" => "Petrarca",
            "squadraOspite" => "New Basket Brindisi",
            "puntiSquadraCasa" => "51",
            "puntiSquadraOspite" => "60",
        ],
        [   // quinta partita
            "squadraCasa" => "Libertas Livorno",
            "squadraOspite" => "Libertas Forlì",
            "puntiSquadraCasa" => "60",
            "puntiSquadraOspite" => "45",
        ],
        [   // sesta partita
            "squadraCasa" => "UG Goriziana",
            "squadraOspite" => "Pall. Pavia",
            "puntiSquadraCasa" => "24",
            "puntiSquadraOspite" => "43",
        ],
    ];
    // Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 

    for ($i = 0; $i < count($arraypartite); $i++){
        echo "<p>" . $arraypartite[$i]["squadraCasa"] . $arraypartite[$i]["squadraOspite"] . " | " . $arraypartite[$i]["puntiSquadraCasa"] . " - " . $arraypartite[$i]["puntiSquadraOspite"] ."</p>" ;
    }
?>



</body>
</html>