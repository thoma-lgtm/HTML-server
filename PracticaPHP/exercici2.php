<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienbenida</title>
</head>
<body>

<p>Crea un fitxer salutacio.php que rebi per URL</p>

<?php
$nom = $_GET['nom'];
$edat = $_GET['edat'];

echo "Hola $nom, tens $edat anys.";
?>

<p>Para agregar info </p>

</body>
</html>