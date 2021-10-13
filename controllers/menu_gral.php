<?php
   class menu_gral extends Controller
   {
       
       function __construct() 
       {
           parent::__construct();
           
           $this->view->platillo=[];
       }
       function render(){
           
        $platillo=$this->model->get();
        $this->view->platillo=$platillo;           
        $this->view->render('menu_gral');
       }
       

    function verPlatillo($param = null){
        $id_platillos = $param[0];
        $platillo = $this->model->getById($id_platillos);
        
        session_start();
        $_SESSION['id_verPlatillo'] = $platillo->id_platillos;
        
        $this->view->platillo = $platillo;
        $this->view->mensaje = "";
        $this->view->render('detallePlato_establecimiento');
    }
       function actualizarPlatillo(){
        session_start();
        $id_platillos    = $_SESSION['id_verPlatillo'];
        $nombre=$_POST['nombre'];
        $caracteristicas  = $_POST['caracteristicas'];
        $precio=$_POST['precio'];

        unset($_SESSION['id_verPlatillo']);

        if($this->model->update(['nombre' => $nombre, 'caracteristicas' => $caracteristicas,
         'precio' => $precio,'id_platillos'=> $id_platillos] )){
            // actualizar platillo exito
            $platillo = new Platillo();
            $platillo->nombre = $nombre;
            $platillo->caracteristicas = $caracteristicas;
            $platillo->precio = $precio;
            
            $this->view->platillo = $platillo;
            echo "Platillo actualizado correctamente";
        }else{
            // mensaje de error
            echo "No se pudo actualizar el platillo";
        }
        $this->view->render('detallePlato_establecimiento');
    }
   }

?>
