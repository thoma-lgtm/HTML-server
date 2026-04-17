<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
</head>
<body>
    
<p>Crea una pàgina amb un formulari que demani: Nom, Ciutat
El formulari s’ha d’enviar amb GET i el mateix script ha de mostrar:
Hola [nom], vius a [ciutat].
</p>

<h2>Formulari</h2>

<form method="GET">
    Nom: <input type="text" name="nom"><br>
    Ciutat: <input type="text" name="ciutat"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['nom']) && isset($_GET['ciutat'])) {
    $nom = $_GET['nom'];
    $ciutat = $_GET['ciutat'];

    echo "<p>Hola $nom, vius a $ciutat.</p>";
}
?>

</body>
</html>