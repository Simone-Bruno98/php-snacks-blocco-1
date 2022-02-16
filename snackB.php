<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK B</title>
</head>
<body>

    <?php 
        // Passare come parametri GET name, mail e age
        $nome = $_GET["name"];
        $email = $_GET["mail"];
        $eta = $_GET["age"];

        // verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
        // che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”        
        if (strlen($nome)>3 && strpos($email,"@") !== false && strpos($email,".") !== false && is_numeric($eta) ){
            echo "<h1>"."Accesso riuscito"."</h1>";
        }else{
            echo "<h1>"."Accesso negato"."</h1>";
        }
    ?>
</body>
</html>

<!-- strlen($nome)>3 -->