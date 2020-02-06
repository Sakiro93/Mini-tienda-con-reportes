<?php
class CtrProveedor {
    private $model;
    private $dao;
    function __construct() {
        require '../modulobase/Conexion.php';
        require 'entidad/EntProveedor.php';
        require 'interfaz/IntProveedor.php';
        require 'dao/DaoProveedor.php';
        $this->model = new EntProveedor();
        $this->dao = new DaoProveedor();
    }
    public function view($uid = null) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;
                switch ($frm->action) {
                    case 'nuevo':
                        $this->model = new EntProveedor(0, $frm->nombre, $frm->ruc, $frm->direccion, $frm->telefono, $frm->correo,isset($frm->estado)?1:0);
                         $salida = $this->dao->crear($this->model);  
                         die('{"resp" : true}');
                       
                        break;
                    case 'editar':
                        $this->model = new EntProveedor($frm->id, $frm->nombre, $frm->ruc, $frm->direccion, $frm->telefono, $frm->correo,isset($frm->estado)?1:0);
                        $salida = $this->dao->editar($this->model);   
                        die('{"resp" : true}');                     
                        break;
                    case 'eliminar':
                         $salida = $this->dao->eliminar($frm->id);
                         die('{"resp" : true}');
                       
                }
            }
        } else {
            //acciones por GET
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                if ($action == 'editar') {
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
                require 'vista/listado.php';
            }
        }
    }
}
?>