<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>exercici7</title>
</head>
<body>
    
<p>Exercici 7 — Sessions ($_SESSION)
Objectiu: guardar dades durant la sessió.
Enunciat
Crea dues pàgines:
login.php
Demana el nom de l’usuari i el guarda en una sessió.
perfil.php
Mostra:
Usuari connectat: [nom]

</p>

<h2>Perfil</h2>

<p>Usuari connectat: <?php echo htmlspecialchars($usuari); ?></p>

<?php
session_start();

if (!isset($_SESSION["usuari"])) {
    echo "No hi ha cap usuari connectat.";
    exit();
}

$usuari = $_SESSION["usuari"];
?>

</body>
</html>