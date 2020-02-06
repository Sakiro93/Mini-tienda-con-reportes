<?php

if (isset($_POST['model'])) {
    switch ($_POST['model']) {
        case 'cliente':
            require 'controlador/CtrCliente.php';
            $ctrcliente = new CtrCliente();
            $ctrcliente->view("");
            break;
      
        default:
            break;
    }
}
echo '{"error":"Parametros incorrectos.."}';
