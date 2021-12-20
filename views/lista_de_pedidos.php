<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Evita que al abrir en movil, el usuario haga zooom-->
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
       <!--TITULO E ICONO EN PESTAÑA DEL NAVEGADOR-->
    <title>PRINCIPAL</title> <link rel="shortcut icon" href="public/IMG/icono.png"> 
    </head>
    <body>
        <!--Encabezado-->
    <div class="header-main">
        <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#">
            <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo">
            </a>
            
</ul>
    </div>
</div>
<br><br><br><br>
<br><br>


        <!--TARJETAS PROMOCIONALES-->
            <div class="contenedor-cards">
      <div class="row"><br><br><br>
          <!--TARJETA 1 COMENSAL-->
        <div class="col">
          <div class="card">
            <div class="titulo-card">
              <h1 class="text-cards">LISTAS DE PEDIDOS</h1>
            </div>
            <div class="card-body">
            <small>Con envio a domicilio</small>
              <h3 class="card-title">SIN PEDIDOS REGISTRADOS</h3>
           
            </div>
          </div>
        </div> <br><br><br>
       

        
    </div>
    <br><br><br>
    <?php require 'views/footer.php';?>

</body>

</html>