<?php 
require '../administrador/user/entidad/EntLogin.php';
require '../administrador/validarsession.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../static/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/chosen.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>                
        <link href="../../static/css/table.css" rel="stylesheet" type="text/css"/>    
    
    </head>
    <body>
        <?php
        $sal = '../principal/';
        require '../principal/header.php';
        require 'rol/controlador/CtrRol.php';
        $ctrrol = new CtrRol();
        $ctrrol->view();
        ?>
        <script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../static/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../static/js/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="../js/accion.js" type="text/javascript"></script>
        <script>
            $('.chosen-select').chosen();
        </script>

    </body>
</html>
