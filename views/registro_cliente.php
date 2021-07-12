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
    <form action="<?php echo constant('URL');?>nuevo/registrarCliente" method="post" id="cuadro" class="cuadro">
    <h1>REGISTRO USUARIO</h1>
    <p>Nombre del usuario:<input type="text" placeholder="Ingrese nombre" name="usuario" id="usuario" required></p>    
    <p>Contraseña:<input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" required></p>
    <p>Telefono:<input type="tel" placeholder="+529531712545" name="telefono" id="telefono" required></p>    
    <p>Ubicacion:<button type="button" name="ubicacion" onclick="geoloc()">ubicar</button>
    <label id="demo"></label><br><br>
    <input type="submit" value="REGISTRAR" id="registro" class="registro_cliente"></input>
    <br><br>
</form>
    </article>
</div>


<?php require 'views/footer.php';?>
        
</body>
</html>