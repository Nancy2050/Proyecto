<!DOCTYPE html>
<html  lang="es">
    <head>
        <meta charset="UTF-8">
        <title>MENSAJE</title>
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    </head>
    <body>
    <?php require 'views/header.php';?>
    <img  id="e" src="<?php echo constant('URL');?>public/IMG/creador.svg" alt="descripción" /><br><br>

        <div  id="error" class="error">
          <h1 class="error"><?php echo $this->mensaje; ?></h1>
          <h6>Copyright © 2021 NVS - Food.exe | Credits </h6>
        </div>
        
   </body>

</html>
