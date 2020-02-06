<article id="content">
    <div class="container-fluid">
        <?php
        if (!isset($q)) {
            $q = '';
        }
        ?>
        <div class="row">

            <div class="col-md-12">
                <?php
                require '../principal/navegador.php';
                ?>  

                <div class="panel panel-default panel-table panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-1">
                                <img src="../../static/img/menu/presentacion.png"  height="65">
                            </div>
                            <div class="col col-xs-4">
                                <h3>ARTICULOS DE VESTIMENTAS</h3>
                            </div>                                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col col-xs-6">
                                <form method="GET" action="articulo.php">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-info">
                                                <span id="search_concept">Busqueda </span>                                       
                                        </div>                      
                                        <input type="text" class="form-control" name="q" placeholder="Buscar Articulo" value="<?= $q ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                        </span> 
                                    </div>
                                </form>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="btn-group">
                                    <a class="btn btn-success" href="articulo.php?action=nuevo&id=0">
                                        <i class="glyphicon glyphicon-plus-sign"> </i>  
                                        Nuevo Registro
                                    </a>
                                    <a href="javascript:window.location.reload();" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-refresh"> </i>
                                        Actualizar
                                    </a>
                                    <a href="../principal/admin.php" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-remove"> </i>
                                        Salir
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered table-responsive table-striped" id="tdatos">
                            <thead>
                                <tr>
                                    <?php
                                    $cabecera = array("ID", "Foto", "Nombre", "Descripcion", "Categoría", "Marca", "Proveedor", "Precio", "Stock","Estado", "Accion");
                                    foreach ($cabecera as $datos) {
                                        echo "<th class='text-center'>$datos</th>";
                                    }
                                    ?>
                                </tr> 
                            </thead>
                            <tbody id="tdetalle">
                                <?php foreach ($this->dao->listar() as $articulo): ?>
                                    <tr>
                                        <td align="center"><?= $articulo->Id ?></td>
                                        <?php
                                        if (file_exists($articulo->Foto)) {
                                            echo"<td> <img id='imagen' bgcolor='#222' src='$articulo->Foto' width='50' height=40'  style='border: 4px solid #168E97'/></td>";
                                        } else {
                                            echo"<td> <img id='imagen' bgcolor='#222' src='../../static/img/articulo/no_imagen.png' width='50' height=40'  style='border: 4px solid #168E97'/></td>";
                                        }
                                        ?> 
                                        <td align="center"><?= $articulo->Nombre ?></td>
                                        <td align="center"><?= $articulo->Descripcion ?></td>
                                        <td align="center"><?= $articulo->IdCategoria ?></td>
                                        <td align="center"><?= $articulo->IdMarca ?></td>
                                        <td align="center"><?= $articulo->IdProveedor ?></td>
                                        <td align="center"><?= $articulo->Precio ?></td>
                                        <td align="center"><?= $articulo->Stock ?></td>
                                        <td align="center"><span class="label label-<?= (($articulo->Estado == true) ? "success" : "danger") ?>" title="Activo"><?= (($articulo->Estado == true) ? "Activo" : "Inactivo") ?></span></td> 
                                        <td align="center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="glyphicon glyphicon-log-in"></i> Acción
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a rel="action" data-json='{"entidad":"articulo","action":"editar","id":"<?= $articulo->Id ?>"}'>
                                                            <i class="glyphicon glyphicon-edit"></i> Editar
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a rel="action" data-json='{"entidad":"articulo","action":"eliminar","id":"<?= $articulo->Id ?>"}'>
                                                            <i class="glyphicon glyphicon-remove"></i> Eliminar
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
</article>