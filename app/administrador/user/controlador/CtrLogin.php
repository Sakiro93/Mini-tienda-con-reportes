<?php
class CtrLogin {
    private $model;
    private $dao;
    function __construct() {
        require '../modulobase/Conexion.php';
        require '../administrador/user/entidad/EntLogin.php'; 
        require '../administrador/user/interfaz/IntLogin.php';  
        require '../administrador/user/dao/DaoLogin.php'; 
        $this->dao = new DaoLogin();
    }
    public function view() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) {
                $cuenta = $_POST['cuenta'];
                $passw = $_POST['clave'];
                $this->model = $this->dao->login($cuenta, $passw);
                if (is_object($this->model)) {
                    if (session_id() == '') {
                        session_start();
                    }
                    if($this->model->rol =='1'){
                          $_SESSION ['_USER_'] = $this->model;
                          die('{"resp":"true1"}');
                    }else{
                          if($this->model->rol =='2'){
                          $_SESSION ['_USER_'] = $this->model;
                          die('{"resp":"true2"}');
                    }
                    }
                    
                  
                }
                echo '{"resp":false}';
            }
        }
    }
}
?>