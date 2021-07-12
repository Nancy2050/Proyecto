<?php
include_once("./libs/database.php");
include_once("./models/nuevomodel.php");
include_once("./libs/model.php");
$this->db=new Database();
$db = $this->db->connect();
$idusuario=$_SESSION['id_cliente'];
//echo $idusuario;
$query= $db->prepare("SELECT * FROM cliente WHERE id_cliente='$idusuario'");
$query->execute();

$row=$query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/login.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cabecera.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.css" type="text/css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/barra.js" type="text/css">


    <title>HOME COMENSAL</title>
</head>
<body id="pawegrap" >
<div id="header2">
    <ul class="clearfix" >
        <li><a href="<?php echo constant('URL');?>main"> &#x1F37D Food.exe</a></li>
        
    </ul>
   </div>  
<div id="sidebar">
      <div class="toggle-btn">
        <span>&#8803</span>
      </div>
      <ul>
        <li>
        <!--  <img src="img/logo.jpg" alt="Logo Fazt" class="logo"> -->
        </li>
        <li><a href="#" id="barra">Ofertas cercanas</a></li>
        <li></li>
        <li><a href="#" id="barra">Redes sociales</a></li>
        <li></li>
        <li><a href="#" id="barra">Lista de pedidos</a></li>
        <li></li>
        <li><a href="<?php echo constant('URL');?>home_cliente" id="barra">Mapa de establecimientos</a></li>
        <li></li>
        <li></li>
        <li><a href="<?php echo constant('URL');?>cerrar" id="barra">Cerrar sesion</a></li>

      </ul>
 </div>
 <img style="float:center; width: 150px" src="../public/IMG/perfil.png" alt="descripción" />

      <article class="cuadro-inicial">
    <h1 style="color: #fd9c28; text-align: center;">DATOS DEL COMENSAL</h1>
    <h2 style=" text-align: center;">            
    <strong> Nombre </strong> : <?php echo utf8_decode($row['usuario']);?><br><br><br>
    <strong> Telefono </strong> : <?php echo utf8_decode($row['telefono']);?><br><br><br>
    <strong> Contraseña </strong> : <?php echo utf8_decode($row['contra']);?><br><br><br>
  
   <h2 id="x"  style=" text-align: center;">&#x270F Editar</h2>

    </article>

    <script src="<?php echo constant('URL');?>public/css/barra.js"></script>

</body>
</html>