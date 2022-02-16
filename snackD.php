<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK D</title>
</head>
<body>
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, nostrum! Ipsam cupiditate soluta fugit incidunt error ipsum, commodi rem, tenetur aperiam nam quod tempora molestiae. Aliquam blanditiis tenetur quasi quaerat!";
    $pieces = explode(".", $paragraph);
    echo "<h1>".$paragraph."</h1>";

    for($i = 0; $i < count($pieces); $i++){
        echo "<h1>".$pieces[$i]."</h1>";
    }
    ?>
</body>
</html>