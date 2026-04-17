<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario amb POST</title>
</head>
<body>
    
<p>Enunciat
Crea un formulari que demani:
Usuari

Contrasenya

Quan s’envia el formulari, mostra:
Usuari introduït: [usuari]
La contrasenya no s’ha de mostrar.
</p>

<form method="POST">
Usuari: <input type="text" name="usuari">
<input type="submit"><br>
Password: <input type="password" name="password">
<input type="submit">


</form>

<?php
if(isset($_POST['usuari'])){
   echo "Usuari: " . $_POST['usuari'];
}
?>

</body>
</html>