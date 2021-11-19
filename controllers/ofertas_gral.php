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

   }

?>