<?php
session_start();
$idusuario=$_SESSION['id_establecimiento'];
$estado=false;
if(isset($idusuario)){
    $estado=true;
}
?>