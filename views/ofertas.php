  
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link type="text/css" href="<?php echo constant('URL');?>public/css/estilos2.css" rel="stylesheet"/>
</head>
<div id="fondo" background="<?php echo constant('URL');?>public/imagen/fondo.jpg">
            </div>
<body background="<?php echo constant('URL');?>public/imagen/fondo.jpg">
	<p><img class="img7" src="<?php echo constant('URL');?>public/imagen/descarga.jpg" alt="mas"></p>
	<p><img class="img8" style="float:left; width:100px" src="<?php echo constant('URL');?>public/IMG/flecha.png" onclick="location.href='<?php session_start(); echo constant('URL');?>home_establecimiento'" alt="mas"></p>
    <div id="envoltura">
        <div id="contenedor">
            </div>
            <div id="cuerpo">
                <form id="form-login" style="align=center;" action="" method="post" autocomplete="off">
				<p><font size=8 color="black" face="Cambria,arial">
				<b>OFERTAS</b>
				</p></font>
				<br>
					<p  style="align=left;"><input type="text" placeholder="Nombre del platillo" name="nombrecompleto"></p>
					<p style="align=left;"><br><br><input type="text" placeholder="Descripcion" name="nombrecompleto"></p>
					
					<label class="element_form"><br>Precio normal:
					</label><input style="font-weight: bold;font-family:Arial;font-size:20px;" 
					type="number" name="precio" id="precio" value="0" min="0" max="500"></div>
					
					<!--<label class="element_form"><br>Precio con descuento:
					<input style="font-weight: bold;font-family:Arial;font-size:20px;position:relative; top:-10%;"
					type="number" name="precio2" id="precio2" value="0" min="0" max="500"></p>-->
					
					<form action="upload.php" method="POST" enctype="multipart/form-data">
					<input style="position:absolute; top:350px;left:200px;" type="file" name="file">
					<p><img class="img5" src="<?php echo constant('URL');?>public/imagen/galeria.png" alt="mas"></p>
	
					</form>
					<p><img class="img6" src="<?php echo constant('URL');?>public/imagen/mas.png" alt="mas"></p>
					     
                    <p id="bot"><input type="submit" id="submit" name="submit" value="ACTUALIZAR" onclick="location.href='inicio_establecimiento.php'" class="boton"></p>
                </form>
            </div><!--fin cuerpo-->
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
</html>