
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">
   
    <title>DATOS DEL ESTABLECIMIENTO</title>

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
                 <img src="<?php echo constant('URL');?>public/IMG/user.svg" height="30px" width="30px"/> 
                </li>
            </ul>
    </div>
</div> <br><br>
<?php require 'views/header.php';?>

   <?php    
    include_once 'models/establecimiento.php';
    foreach ($this->establecimientos as $row){
        $establecimientos=new establecimiento();
        $establecimientos=$row;   }     
        ?>
      <article id="datos">
    <ul>
      <li>
        <img  id="perfil-negocio" src="<?php echo constant('URL');?>public/IMG/negocio.png" alt="negocio" />
          <span id="food"><?php echo $establecimientos->nombre;?></span>
    </li>
    <li>
        <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/telefono.png" alt="negocio" />
          <span> Telefono: <?php echo $establecimientos->telefono;?></span>
    </li>
    <li>
        <img  id="loguito" src="<?php echo constant('URL');?>public/IMG/calendario.png" alt="negocio" />
          <span> Horario: <?php echo $establecimientos->horario;?></span>
    </li>
   <h4  style=" text-align: left;">Comentarios : <a href="#" id="barra"> Ver mas... </a><br><br><br></h4>
  
   <a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_menu/'.$establecimientos->id_establecimiento?>">
   <button class="btn btn-primary"> Menú </button></a> 

   <!--<a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_redes/'.$establecimientos->id_establecimiento?>">-->
   <button class="btn btn-primary"> Redes sociales </button></a> 
   
   <a href="<?php echo constant('URL').'menu_gral_cliente/Consulta_ofertas/'.$establecimientos->id_establecimiento?>">
   <button class="btn btn-primary"> Ofertas </button></a> 
   
</article>  
</body>
</html>
