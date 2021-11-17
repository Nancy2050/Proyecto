<?php
include_once 'models/oferta.php';

   class oferta_gralModel extends Model
   {

      public function __construct() 
       {
           parent::__construct();
       }
       public function get(){ 
            $items=[];
        try{
            
            session_start();
            $oferta=$_SESSION['id_establecimiento'];
            $query=$this->db->connect()->query("SELECT * FROM oferta WHERE id_establecimiento='$oferta'");
            while($row=$query->fetch((PDO::FETCH_ASSOC))){
                $item=new oferta();
                $item->nombre=$row['nombre'];
                $item->descuento=$row['descuento'];
                $item->especificacion=$row['especificacion'];
                $item->id_establecimiento=$row['id_establecimiento'];
                $item->tiempo=$row['tiempo'];
                $item->id_ofertas=$row['id_ofertas'];

                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return[];
        }
       }
       
   }

?>