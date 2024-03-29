
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    
    <title>MENÚ</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">

    <div id="header">
    <ul>
      <li>
   <!-- REGRESA A PAGINA ANTERIOR-->
    <a href="<?php echo constant('URL');?>home_establecimiento"> 
     <img src="<?php echo constant('URL');?>public/IMG/flecha2.png" width="50px"/>   </a></li>
  
    </ul>
   </div>  
</head>
<h1>MENU DEL ESTABLECIMIENTO</h1>

<table>    
<thead>
<tr id="firstrow">
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th colspan="3">Editar</th>
</tr>
</thead>
<tbody>
    <?php    
    include_once 'models/platillo.php';
    foreach ($this->platillo as $row){
        $platillo=new Platillo();
        $platillo=$row;
        
        ?>
    <tr id="filas">
        <td><?php echo $platillo->nombre;?></td>
        <td><?php echo $platillo->caracteristicas;?></td>
        <td><?php echo $platillo->precio;?></td>

        <td><a href="<?php echo constant('URL').'menu_gral/verPlatillo/'.$platillo->id_platillos?> ">Modificar</td>
        <td><a href="<?php echo constant('URL').'menu_gral/eliminarPlatillo/'.$platillo->id_platillos?> ">Eliminar</td>
        <td><a href="<?php echo constant('URL').'ofertas_gral/verOferta/'.$platillo->id_platillos?> ">Ofertar</td>
        
        <?php }?>
    </tr>
</tbody>
<tfoot>
    <tr id="firstrow">
    <th colspan="6" >
        <a href="<?php echo constant('URL');?>menu_Establecimiento" id="barra">
        <button class="redondo" >AÑADIR PLATILLO</button></a>
    </th>
</tr>
</tfoot>
</table>
</html>
