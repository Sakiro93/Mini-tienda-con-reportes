<?php
class CtrTipo {
    private $model;
    private $dao;
    function __construct() {
        require '../modulobase/Conexion.php';
        require 'entidad/EntTipo.php';
        require 'interfaz/IntTipo.php';
        require 'dao/DaoTipo.php';
        $this->model = new EntTipo();
        $this->dao = new DaoTipo();
    }
    public function view($uid = null) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;
                switch ($frm->action) {
                    case 'nuevo':
                        $this->model = new EntTipo(0, $frm->descripcion);
                         $salida = $this->dao->crear($this->model);  
                         die('{"resp" : true}');
                       
                        break;
                    case 'editar':
                        $this->model = new EntTipo($frm->id, $frm->descripcion);
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