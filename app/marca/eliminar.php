<?php
require '../administrador/user/entidad/EntLogin.php';
if (session_id() == '') {
    session_start();
}
$user = $_SESSION['_USER_'];
if (isset($_POST['model'])) {
    switch ($_POST['model']) {
        case 'marca':
            require 'controlador/CtrMarca.php';
            $ctrMarca = new CtrMarca();
            $ctrMarca->view($user->logId);
            break;
        default:
            break;
    }
}
echo '{"error":"Parametros incorrectos.."}';
?>