<?php
class Database{

    function connect(){
        try{
            //Asigna LOCALHOST
            //Le continua el puerto con PORT
            //Finalmente se especifica el nombre de la base de datos
        $dsn = 'mysql:host=localhost;port=3307;dbname=base de datos';
        //El usuario por defecto es ROOT, sin contraseña    
        $username = 'root';
        $password = '';
        $options = array(
   //La extensión Objetos de Datos de PHP (PDO) 
   //define un interfaz ligera para poder acceder a cualquier base de datos en PHP .
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO($dsn, $username, $password, $options);
    return $pdo;

        }catch (PDOException $e){
            print_r('Error connection: '.$e->getMessage());
        }        
    }
}

?>