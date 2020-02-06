<?php
require '../administrador/user/entidad/EntLogin.php';

if (session_id() == '') {
    session_start();
}
$user = $_SESSION['_USER_'];

if (isset($_POST['model'])) {
    switch ($_POST['model']) {
        case 'rol':
            require 'rol/controlador/CtrRol.php';
            $ctrrol = new CtrRol();          
            $ctrrol->view($user->logId);
            break;
         case 'user':
            require 'user/controlador/CtrUser.php';
            $ctruser = new CtrUser;           
            $ctruser->view($user->logId);
            break;
        

        default:
            break;
    }
}
echo '{"error":"Parametros incorrectos.."}';

