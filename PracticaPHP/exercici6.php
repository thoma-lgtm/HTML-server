<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>exercici6</title>
</head>
<body>
    
<p>Enunciat
Crea una pàgina que:
Guardi una cookie amb el nom de l’usuari.

Si la cookie existeix, mostri:

Benvingut de nou, [nom]
</p>


<?php
setcookie("usuari", "Joan", time()+3600);

if(isset($_COOKIE['usuari'])){
   echo "Usuari guardat: " . $_COOKIE['usuari'];
}
?>


</body>
</html>