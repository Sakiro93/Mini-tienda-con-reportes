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
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>                
    </head>
    <body>        
        <?php
        $sal = '../principal/';
        require '../principal/header.php'; ?>
        
        <article id="content">
            <div class="container">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading "><h4>Modulos del Sistema</h4></div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="row-fluid" id="menu">
                                <a href="user.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/usuario.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Usuarios</h4>
                                            <span class="icondesc">Registro de Usuarios</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="rol.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/ct5.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Rol</h4>
                                            <span class="icondesc">Administración de Roles</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../static/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
