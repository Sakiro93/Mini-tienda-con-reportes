<?php 
require '../administrador/user/entidad/EntLogin.php';
$u = '../principal/';
require '../administrador/validarsession.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proveedor</title>
        <link href="../../static/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>                
        <link href="../../static/css/table.css" rel="stylesheet" type="text/css"/>        
    </head>
    <body>
        <?php        
        $sal = '../principal/';
        require '../principal/header.php';
        require 'controlador/CtrProveedor.php';
        $ctrProveedor = new CtrProveedor();
        $ctrProveedor->view();
        ?>
        <script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../static/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/accion.js" type="text/javascript"></script>
          
    </body>
</html>
