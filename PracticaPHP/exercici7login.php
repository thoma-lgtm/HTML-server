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

<h2>Inici de sessió</h2>

<form method="POST" action="">
    <label for="usuari">Nom d'usuari:</label><br>
    <input type="text" name="usuari" id="usuari" required><br><br>

    <input type="submit" value="Entrar">
</form>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["usuari"] = $_POST["usuari"];
    header("Location: exercici7perfil.php");
    exit();
}
?>

</body>
</html>