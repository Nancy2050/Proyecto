
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> 
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
    <meta http-equiv="Pragma" content="no-cache"> 
    <title>DETALLE PLARILLO</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">

</head>
<body id="inicial">
<?php require 'views/header.php';
   
?>
<?php    
    include_once 'models/platillo.php';
    foreach ($this->platillo as $row){
        $platillo=new Platillo();
        $platillo=$row;
        
        ?>
    <!--Los datos del formulario son enviados a ingresar.php ahi se usan para almacenarlos en la base de datos-->
    <form action="<?php echo constant('URL');?>menu_gral/actualizarPlatillo" method="post" id="login" class="login">
    <h3 class="center">MODIFICACION DE <?php echo $platillo->nombre; ?> </h3>
   
    <div class="form-group">
			<label>Platillo:</label> <!--RECORDAR: Redonly para tener id_platillo pero que no se pueda modificar-->
			<input type="text" name="id_platillos" id="id_platillos" class="form-control" readonly value="<?php echo $platillo->id_platillos; ?>" required>
		</div> <br>
    <div class="form-group">
			<label>Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $platillo->nombre; ?>" required>
		</div> <br>
        
        <div class="form-group">
			<label>Descripción:</label>
			<textarea class="form-control" name="caracteristicas" id="caracteristicas"required> <?php echo $platillo->caracteristicas; ?> </textarea> </div> <br>
        <div class="form-group">
			<label>Precio:</label>
			<input type="number" class="form-control" name="precio" id="precio" value="<?php echo $platillo->precio; ?>" required>
		</div> <br>
    <input type="submit" id="platillos" class="btn btn-primary btn-block"  value="ACTUALIZAR PLATILLO" ></input>
    <?php }?>

</form>
    </article>
</div>



<?php require 'views/footer.php';?>
        
</body>
</html>
