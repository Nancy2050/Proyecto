<?php
 /**
   * Incluye documentos para conectar a base de datos
   * Accede a nuevomodel donde esta iniciarsesion1
   * Model instancia a la base de datos
   *
   */
include_once("./libs/database.php");
include_once("./models/nuevomodel.php");
include_once("./libs/model.php");
$this->db=new Database();
$db = $this->db->connect();
error_reporting(0);
session_start();
$idusuario=$_SESSION['id_establecimiento'];//Obtiene id de la sesion iniciada
$query= $db->prepare("SELECT * FROM establecimiento WHERE id_establecimiento='$idusuario'");
$query->execute();

$row=$query->fetch(PDO::FETCH_ASSOC);//devuelve columnas de elementos del establecimiento
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">       <!--TITULO E ICONO EN PESTAÑA DEL NAVEGADOR-->
    <title>HOME ESTABLECIMIENTO</title> <link rel="shortcut icon" href="<?php echo constant('URL');?>public/IMG/icono.png"> 

</head>

<body >

        <!--Encabezado-->
        <div class="header-main">
          <div class="main-content">
            <ul class="elementos-header">
            <!--ICONO PRINCIPAL ESQUINA SUPERIOR-->
            <a href="#"> 
              <img src="<?php echo constant('URL');?>public/IMG/logo.png" class="logo"></a>

            <!--SESION CON NOMBRE ESTABLECIMIENTO--> <li>    
                 <span> <?php echo utf8_decode($row['nombre']);?></span>
                 <img src="<?php echo constant('URL');?>public/IMG/negocio.png" height="30px" width="30px"/> 
                </li>
            </ul>
    </div>
</div> <br><br>

<div id="barra-lateral" class="barra-lateral">
  
      <ul>
        <li ><a href="<?php echo constant('URL').'menu_gral/render/'.$row['id_establecimiento']?>" id="barra">
        <button class="redondo" >
        <img src="<?php echo constant('URL');?>public/IMG/comida.png" height="30px" width="30px"/>                              
        MENU</button></a></li>

        <li ><a href="<?php echo constant('URL').'ofertas_gral/render/'.$row['id_establecimiento']?>" id="barra">
        <button class="redondo">
        <img src="<?php echo constant('URL');?>public/IMG/oferta.png" height="30px" width="30px"/>                     
        OFERTAS</button></a></li>

        <li ><a href="<?php echo constant('URL');?>compartir_establecimiento" id="barra">
        <button class="redondo" >
        <img src="<?php echo constant('URL');?>public/IMG/redes.png" height="30px" width="30px"/>                               
        REDES SOCIALES</button></a></li>

        <li ><a href="#" id="barra">
        <button class="redondo">
        <img src="<?php echo constant('URL');?>public/IMG/mesas.png" height="30px" width="30px"/>                             
        MESAS DISPONIBLES</button></a></li>

        <li ><a href="<?php echo constant('URL');?>lista_de_pedidos" id="barra">
        <button class="redondo">
        <img src="<?php echo constant('URL');?>public/IMG/carrito.png" height="30px" width="30px"/>                               
        LISTA DE PEDIDOS</button></a></li>

        <li ><a href="<?php echo constant('URL');?>home_cliente" id="barra">
        <button class="redondo" > MAPA</button></a></li>

        <li ><a href="<?php echo constant('URL');?>cerrar" id="barra">
        <button class="redondo">CERRAR SESION</button></a></li>
        
    </ul> 
</div>
      <article id="datos">
        <ul>
          <li>
              <img  id="perfil-negocio" src="<?php echo constant('URL');?>public/IMG/negocio.png" alt="empresa" />
               <span id="food"> <?php echo utf8_decode($row['nombre']);?></span>
            </li> <br><br>
          <li>
                <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/restaurante.png" alt="empresa" />
                <span>Ubicacion: <?php  echo utf8_decode($row['ubicacion']);?></span>
          </li>
          <li>
               <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/telefono.png" alt="empresa" />
              <span> Telefono : <?php  echo utf8_decode($row['telefono']);?></span>
          </li>
          <li>
              <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/calendario.png" alt="empresa" />
              <span>Horario : <?php  echo utf8_decode($row['horario']);?></span></h4>
          </li>

    <h4 >            
    </article>

    <script src="<?php echo constant('URL');?>public/css/barra.js"></script>
  
</body>
<?php require 'views/footer.php';?>

</html>
