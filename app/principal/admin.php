<?php
require '../administrador/user/entidad/EntLogin.php';
require '../administrador/validarsession.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>E-commerce</title>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/estilo.css" rel="stylesheet" type="text/css"/>   
    </head>
    <body>

        <?php 
        require 'header.php'; 
        ?>       


        <article id="content">
            
            <div class="container">  
                
                <?php
                require './navegador.php';
                $rol = explode('|', $user->lognombre)[0];
                ?>     


                <div class="panel panel-default">
                     <div class="panel-heading text-center "><h4></h4></div>
                  
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div style="" class="row-fluid" id="menu">      
                               
                                <a href="../articulo/articulo.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/presentacion.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Articulos</h4>
                                            <span class="icondesc">MODULO ARTICULOS</span>
                                        </div>
                                    </div>
                                </a>
                               
                                <a href="../marca/marca.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/marca.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Marcas</h4>
                                            <span class="icondesc">MODULO DE MARCAS</span>
                                        </div>
                                    </div>
                                </a> 
                                <a href="../proveedor/proveedor.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/proveedor1.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Proveedores</h4>
                                            <span class="icondesc">MODULO DE PROVEEDORES</span>
                                        </div>
                                    </div>
                                </a> 
                                <a href="../categoria/categoria.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/marca_1.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Categorias</h4>
                                            <span class="icondesc">MODULO DE CATEGORIAS</span>
                                        </div>
                                    </div>
                                </a> 
                                
                                <a href="../tipocuenta/tipo.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/debit-card.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Tipo cuenta</h4>
                                            <span class="icondesc">MODULO DE TIPO</span>
                                        </div>
                                    </div>
                                </a>
                                
                                <a href="../venta/venta.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/shopping-car.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Venta</h4>
                                            <span class="icondesc">MODULO DE VENTAS</span>
                                        </div>
                                    </div>
                                </a> 
                               
                                <a href="../banco/banco.php" class="icon well sbox">
                                    <div class="iconimage">
                                        <div class="pd">
                                            <img src="../../static/img/menu/bank.png" border="0">
                                        </div>
                                    </div>
                                    <div class="iconname">
                                        <div class="pd">
                                            <h4 class="tituloicon">Bancos</h4>
                                            <span class="icondesc">MODULO DE BANCOS</span>
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




        <footer>
        </footer>


        <script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../static/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
