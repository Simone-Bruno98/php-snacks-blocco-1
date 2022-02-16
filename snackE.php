<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK E</title>
</head>
<body>
<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
    $arrayAlunni = [
    [   // primo alunno
        "nome" => "Mario",
        "cognome" => "Rossi",
        "voti" => [7,2,7,8,6],
    ],
    [   // primo alunno
        "nome" => "Francesco",
        "cognome" => "Melassa",
        "voti" => [7,2,5,2,9],
    ],
    [   // primo alunno
        "nome" => "Raffaele",
        "cognome" => "Minchialli",
        "voti" => [7,9,7,8,6],
    ],
];

    for ($i = 0; $i < count($arrayAlunni); $i++){
        echo "<p>" . $arrayAlunni[$i]["nome"] . $arrayAlunni[$i]["cognome"] . " | Media dei voti: " . (array_sum($arrayAlunni[$i]["voti"])/count($arrayAlunni[$i]["voti"])) ."</p>" ;
    }
?>
</body>
</html>