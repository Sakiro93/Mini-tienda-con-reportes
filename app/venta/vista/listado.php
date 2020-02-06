<article id="content">
    <div class="container-fluid">
        <?php
        if (!isset($q)) {
            $q = '';
        }
        ?>
        <div class="row">

            <div class="col-md-12">
                <?php if (!isset($_GET['idd'])) : ?>
                    <?php
                    require '../principal/navegador.php';
                    ?>  
                <?php endif; ?>
                
                <div class="panel panel-default panel-table panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-1">
                                <img src="../../static/img/menu/shopping-car.png"  height="65">
                            </div>
                            <div class="col col-xs-4">
                                <h3>COMPRAS REALIZADAS</h3>
                            </div>                                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col col-xs-6">
                                <form method="GET" action="venta.php">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-info">
                                                <span id="search_concept">Busqueda </span>                                       
                                        </div>
                                        <?php if (isset($_GET['idd'])) : ?>
                                            <input type="hidden" class="form-control" name="idd" placeholder="" value="<?= $_GET['idd'] ?>">
                                        <?php endif; ?>    
                                        <input type="text" class="form-control" name="q" placeholder="Buscar Compra" value="<?= $q ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                        </span> 
                                    </div>
                                </form>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="btn-group">
                                    <a href="javascript:window.location.reload();" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-refresh"> </i>
                                        Actualizar
                                    </a>
                                    <?php if (isset($_GET['idd'])) : ?>
                                        <a href="../articulo/articulo.php?idd=pag" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-remove"> </i>
                                            Salir
                                        </a>
                                    <?php else: ?>  
                                        <a href="../principal/admin.php" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-remove"> </i>
                                            Salir
                                        </a>
                                    <?php endif; ?>  


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered table-responsive table-striped" id="tdatos">
                            <thead>
                                <tr>
                                    <?php
                                    $cabecera = array("ID", "Usuario", "Artículo", "N. Cuenta", "Banco", "Tipo de Cuenta", "Cantidad", "Total", "Fecha", "Accion");
                                    foreach ($cabecera as $datos) {
                                        echo "<th class='text-center'>$datos</th>";
                                    }
                                    ?>
                                </tr> 
                            </thead>
                            <tbody id="tdetalle">
                                <?php if (isset($_GET['idd'])) : ?>
                                    <?php foreach ($this->dao->filtrarVenta($_GET['idd']) as $venta): ?>
                                        <tr>
                                            <td align="center"><?= $venta->Id ?></td>
                                            <td align="center"><?= $venta->IdUsuario ?></td>
                                            <td align="center"><?= $venta->IdArticulo ?></td>
                                            <td align="center"><?= $venta->Cuenta ?></td>
                                            <td align="center"><?= $venta->IdBanco ?></td>
                                            <td align="center"><?= $venta->IdTipo ?></td>
                                            <td align="center"><?= $venta->Cantidad ?></td>
                                            <td align="center"><?= $venta->Total ?></td>
                                            <td align="center"><?= $venta->Fecha ?></td>
                                            <td align="center">
                                                <div class="btn-group">
                                                    <a rel="action" data-json='{"entidad":"venta","action":"descargar","id":"<?= $venta->Id ?>"}' class="btn btn-success">
                                                        <i class="glyphicon glyphicon-save"></i> Descargar Factura
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <?php foreach ($this->dao->listar() as $venta): ?>
                                        <tr>
                                            <td align="center"><?= $venta->Id ?></td>
                                            <td align="center"><?= $venta->IdUsuario ?></td>
                                            <td align="center"><?= $venta->IdArticulo ?></td>
                                            <td align="center"><?= $venta->Cuenta ?></td>
                                            <td align="center"><?= $venta->IdBanco ?></td>
                                            <td align="center"><?= $venta->IdTipo ?></td>
                                            <td align="center"><?= $venta->Cantidad ?></td>
                                            <td align="center"><?= $venta->Total ?></td>
                                            <td align="center"><?= $venta->Fecha ?></td>
                                            <td align="center">
                                                <div class="btn-group">
                                                    <a rel="action" href="../articulo/articulo.php?idd=pag" data-json='{"entidad":"venta","action":"descargar","id":"<?= $venta->Id ?>"}' class="btn btn-success">
                                                        <i class="glyphicon glyphicon-save"></i> Descargar Factura
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
</article>