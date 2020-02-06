<?php

class CtrUser {

    private $model;
    private $dao;

    function __construct() {
        require '../modulobase/conexion.php';
        require '../administrador/user/entidad/EntUser.php'; 
        require '../administrador/user/interfaz/IntUser.php';  
        require '../administrador/user/dao/DaoUser.php';      
        $this->model = new EntUser();
        $this->dao = new DaoUser();  
        
    }

    public function view($uid=null) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;

                switch ($frm->action) {
                    case 'nuevo':
                        $this->model = new EntUser(0,$frm->nombre,$frm->username, $frm->pass,$frm->idrol);
                        if ($this->dao->crear($this->model)) {
                            die('{"resp" : true}');
                        }
                        echo '{"resp" : false,"error" : "El registro no se guardo"}';
                        break;
                    case 'editar':
                        $this->model = new EntUser($frm->id,$frm->nombre,$frm->username, $frm->pass,$frm->idrol);
                        if ($this->dao->editar($this->model)) {
                            die('{"resp" : true}');
                        }
                        echo '{"resp" : false,"error" : "El registro no se Edito"}';
                        break;
                    case 'eliminar':
                        if ($this->dao->eliminar($frm->id)) {
                            die('{"resp" : true}');
                        }
                        echo '{"resp" : false,"error" : "El registro no se a podido Eliminar"}';
                }
            }
        } else {
            //acciones por GET
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                if ($action == 'editar') {
                    // si es editar creamos el objeto modulo
                    $id = intval($_GET['id']);
                    $this->model = $this->dao->buscar($id);
                }
                //mostramos formulario 
                require 'rol/entidad/EntRol.php';
                require 'rol/interfaz/IntRol.php';
                require 'rol/dao/DaoRol.php';
                $r = new DaoRol();
                $roles = $r->listar();
                require 'user/vista/form.php';
            } else {
                if (isset($_GET['q'])) { //question de busqueda
                    $q = $_GET['q'];
                    $this->dao->where = $q;
                }
                //mostramos el listado de registros
                require 'user/vista/listado.php';
            }
        }
    }

}
