<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/login.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cabecera.css" type="text/css">
    <script type="text/javascript" src="<?php echo constant('URL');?>public/css/funciones.js"></script>

</head>
<body class="inicial" id="pawegrap">
<?php require 'views/header.php';?>
<div id="content">
    <img style="float:left;" src="<?php echo constant('URL');?>public/IMG/icono.png" alt="descripción" />

    <article class="cuadro-inicial">
    <form action="<?php echo constant('URL');?>nuevo/sesion1" method="post" id="cuadro" class="cuadro">
    <h1>INICIAR SESIÓN ESTABLECIMIENTO</h1>
    <p>Usuario:<input type="text" placeholder="Ingrese telefono" name="telefono"></p>    
    <p>Contraseña:<input type="password" placeholder="Ingrese contraseña" name="contraseña"></p>
    <br><p>Aun no tienes una cuenta <a href="<?php echo constant('URL');?>registro_establecimiento">Registrarse </a> </p>
    <input type="submit" value="INGRESAR" onclick="registro_es()"></input>
    <br><br>
</form>
    </article>
</div>


<?php require 'views/footer.php';?>
        
</body>
</html>