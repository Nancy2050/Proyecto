<?php
   class ofertas_gral extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           $this->view->oferta=[];

       }
       function render(){
           
        $oferta=$this->model->get();
        $this->view->oferta=$oferta;           
        $this->view->render('ofertas_gral');
    }

   }

?>