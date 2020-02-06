<?php
require '../administrador/user/entidad/EntLogin.php';
if (session_id() == '') {
    session_start();
}
$user = $_SESSION['_USER_'];
if (isset($_POST['model'])) {
    switch ($_POST['model']) {
        case 'cliente':
            require 'controlador/CtrCliente.php';
            $ctrcliente = new CtrCliente();
            $ctrcliente->view($user->logId);
            break;
        default:
            break;
    }
}
echo '{"error":"Parametros incorrectos.."}';