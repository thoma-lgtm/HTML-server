<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercici9</title>
</head>
<body>
    
<p>
    Exercici 9 — $_REQUEST
Objectiu: entendre que combina GET i POST.
Enunciat
Crea un formulari que enviï un camp nom.
Mostra el valor utilitzant $_REQUEST.
Prova el script amb:
GET
POST
</p>

<form method="POST">

Nom: <input type="text" name="nom">
<input type="submit">

</form>

<?php
if(isset($_REQUEST['nom'])){
    echo"nom:".$_REQUEST['nom'];
}
?>


</body>
</html>