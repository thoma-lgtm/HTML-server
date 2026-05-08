<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del servidor</title>
</head>
<body>
    <?php
include'index.php';
?>
<p>
hola    
Exercici1 Crea un script PHP anomenat servidor.php que mostri:
Nom del servidor
IP del client
Navegador del client
Mètode de petició (GET o POST)
 </p>

<?php
echo "Servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "IP client: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Navegador: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Mètode: " . $_SERVER['REQUEST_METHOD'] . "<br>";

?>

</body>
</html>