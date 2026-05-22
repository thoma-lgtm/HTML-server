<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boton Crea Archivos</title>
</head>
<body>
    
<form method="POST">
    <button type="submit" name="crear">Crear archivo</button>
</form>

<br>
<br>

<p>❗Los achivos estan dendro de esta misma carpera, solo cambiar el php final para entrar,❗</p>
<p>Webs de investigación <h2>Bibliografia</h2></p>

<p>
    <ul>
        <li>https://manuais.pages.iessanclemente.net/apuntes/2.programacion/php/3.sesion/3.ficheros/2.crear_escribir/index.html</li>
        <li>https://guidacode.com/2017/php/crear-leer-archivo-en-php/</li>
    </ul>
</p>

</body>
</html>

<?php

if(isset($_POST['crear'])){ //esto es para cuando se pulse el boton

    //Esto es para el nombre del archivo
   $archivo = "Prueba_" . time() . ".txt"; //El time es para crear un nombre distinto

     // Crear archivo
    $fh = fopen($archivo, "w")
    or die("Error al crear el archivo");

     // Esto es el texto creado dento del archvio
    $texto = "Hola pere, Archivo creado el: " . date("d/m/Y H:i:s");


     // ns que hace esto, pero es necesario IA
    fwrite($fh, $texto)
    or die("Error al escribir");
    fclose($fh);
    echo "Archivo creado correctamente: " . $archivo;
}

?>