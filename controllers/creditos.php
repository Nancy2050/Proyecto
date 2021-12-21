<?php
    class Creditos extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = "Seguimos trabajando en el desarrollo de la página";
			$this->view->render('creditos');
		  }
          function render(){}
    }
    ?>