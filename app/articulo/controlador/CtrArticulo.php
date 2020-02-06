<?php

class CtrArticulo {

    private $model;
    private $dao;

    function __construct() {
        require '../modulobase/Conexion.php';
        require 'entidad/EntMarca.php';
        require 'entidad/EntCategoria.php';
        require 'entidad/EntProveedor.php';
        require 'entidad/EntArticulo.php';
        require 'interfaz/IntArticulo.php';
        require 'dao/DaoArticulo.php';
        $this->model = new EntArticulo();
        $this->dao = new DaoArticulo();
    }

    public function guardarImagen() {
        if (isset($_FILES['imagen']) && !empty($_FILES['imagen'])) {
            $file = $_FILES['imagen'];
            $nombre = $file["name"];
            if (!empty($nombre)) {
                $ruta_provisional = $file["tmp_name"];
                $carpeta = "../../static/img/articulo/";
                $src = $carpeta . $nombre;
                //Revisa la carpeta articulos, ahí están las imagenes
                if (!file_exists($src)) {
                    move_uploaded_file($ruta_provisional, $src);
                }
            } else {
                $src = $_POST['foto'];
            }
            return $src;
        } else {
            return $_POST['foto'];
        }
    }

    public function view($uid = null) {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) { // PETICIONES USANDO AJAX           
                $frm = (object) $_POST;
                switch ($frm->action) {
                    case 'nuevo':
                        $this->model = new EntArticulo(0, $this->guardarImagen(), $frm->nombre, $frm->descripcion, $frm->categoria, $frm->marca, $frm->proveedor, $frm->precio, $frm->stock, isset($frm->estado) ? true : false);
                        $salida = $this->dao->crear($this->model);
                        die('{"resp" : true}');

                        break;
                    case 'editar':
                        $this->model = new EntArticulo($frm->id, $this->guardarImagen(), $frm->nombre, $frm->descripcion, $frm->categoria, $frm->marca, $frm->proveedor, $frm->precio, $frm->stock, isset($frm->estado) ? true : false);
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
                if (isset($_GET['q']) && empty($_GET['idd'])) { //question de busqueda
                    $q = $_GET['q'];
                    $this->dao->where = $q;
                    require 'vista/listado.php';
                } else {
                    if (isset($_GET['idd'])) {
                        if (isset($_GET['q'])) {
                            $q = $_GET['q'];
                            $this->dao->where = $q;
                        }
                        require 'vista/pagina.php';
                    } else {
                        require 'vista/listado.php';
                    }
                }
                //mostramos el listado de registros
            }
        }
    }

}

?>