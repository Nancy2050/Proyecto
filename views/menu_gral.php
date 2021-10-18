
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>MENÚ</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/CSS/estilos.css" type="text/css">
    <?php require 'views/header.php';?>

</head>
<h1>MENU DEL ESTABLECIMIENTO</h1>
<table width="100" id="tabla_platos" >
<thead>
<tr id="firstrow">
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th colspan="3">Editar</th>
</tr>
</thead>

</table>
<a href="<?php echo constant('URL');?>menu_establecimiento" id="barra">
        <button class="redondo" id="dos">
        AÑADIR PLATILLO</button></a>
</html>
