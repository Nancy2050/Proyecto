<?php
   class ofertas_gral extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->mensaje = "Agregado de ofertas";

           $this->view->oferta=[];

       }
       function render(){
        //Manda a llamar a la funcion getOfertas que debe estar en el
        //modelo Ofertas_gralModel
        //Por cada controlador, si se manda a llamar a model
        //concatena nombre_controlador+Model 
        //TODO ESTO SE DEFINE EN  libs>>controller>> loadModel
        $oferta=$this->model->getOfertas();
        $this->view->oferta=$oferta;           
        $this->view->render('ofertas_gral');
    }
    function verOferta($param = null){
        $id_platillos = $param[0];
        $oferta = $this->model->getByIdOfertas($id_platillos);
        
        $this->view->oferta = $oferta;
        $this->view->mensaje = "";
      //  $this->view->render('detallePlato_establecimiento');
    }
       
    
          function eliminarOferta($param=null){
        $id_platillos=$param[0];
        
        if($this->model->deleteOfertas($id_platillos)){

         //   $mensaje = 'Platillo eliminado';
            $this->view->render('ofertas_gral');

        }else{
            $mensaje = 'No se pudo eliminar el platillo';
        }     
        echo $mensaje;
    }

   }

?>