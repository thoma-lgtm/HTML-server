<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercici8</title>
</head>
<body>
    
<?php
$a = 90;
$b = 7;

function suma() {
    $resultat = $GLOBALS["a"] + $GLOBALS["b"];
    echo "Resultat: " . $resultat;
}

suma();
?>

</body>
</html>