<?php

class CtrRol {

    private $model;
    private $dao;

    function __construct() {
        require '../modulobase/conexion.php';
        require 'rol/entidad/EntRol.php';
        require 'rol/interfaz/IntRol.php';
        require 'rol/dao/DaoRol.php';        
        $this->model = new EntRol();
        $this->dao = new DaoRol();  
        
    }

    public function view($uid=null) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;

                switch ($frm->action) {
                    case 'nuevo':
                        $this->model = new EntRol(0, $frm->descripcion);
                        if ($this->dao->crear($this->model)) {
                            die('{"resp" : true}');
                        }
                        die( '{"resp" : false,"error" :"Problemas al grabar"}');
                        break;

                    case 'editar':

                        $this->model = new EntRol($frm->id, $frm->descripcion);
                        if ($this->dao->editar($this->model)) {
                            die('{"resp" : true}');
                        }
                        die( '{"resp" : false,"error" : "El registro no se Edito"}');
                        break;

                    case 'eliminar':
                        if ($this->dao->eliminar($frm->id)) {
                            die('{"resp" : true}');
                        }
                        die('{"resp" : false,"error" : "El registro no se a podido Eliminar"}');
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
                require 'rol/vista/form.php';
            } else {
                if (isset($_GET['q'])) { //question de busqueda
                    $q = $_GET['q'];
                    $this->dao->where = $q;
                }
                //mostramos el listado de registros
                require 'rol/vista/listado.php';
            }
        }
    }

}
