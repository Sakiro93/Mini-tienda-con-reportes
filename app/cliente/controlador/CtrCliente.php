<?php

class CtrCliente {
    private $model;
    private $dao;

    function __construct() {
        
      
        require '../modulobase/Conexion.php'; 
        require 'entidad/EntCliente.php';
        require 'interfaz/IntCliente.php';
        require 'dao/DaoCliente.php'; 
        
        $this->model = new EntCliente();
        $this->dao = new DaoCliente();  
        
    }

    public function view($uid=null) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;
                switch ($frm->action) {
                    case 'nuevo':
                          $this->model = new EntCliente(0, $frm->nombre,$frm->apellido,$frm->telefono,$frm->correo,$frm->usuclave);
                           $salida = $this->dao->crear($this->model);  
                          die('{"resp" : true}');
       
                }
            }
        } else {
            //acciones por GET
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                if ($action == 'editar' ) {
                    // si es editar creamos el objeto modelo
                    $id = intval($_GET['id']);
                    $this->model = $this->dao->buscar($id);
                }
                //mostramos formulario 
                require 'vista/form.php';
            } else {
                if (isset($_GET['q'])) { //question de busqueda
                    $q = $_GET['q'];
                    $this->dao->where = $q;
                }
                //mostramos el listado de registros
                require 'vista/form.php';
            }
        }
    }
}
