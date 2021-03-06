<article id="content">
    <div class="container-fluid">

        <div class="row">
            <div class="row-fluid">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li><a href="../principal/admin.php">Inicio</a><span class="divider"></span></li>
                        <li><a href="javascript:window.location.reload();" class="active">Usuarios</a> <span class="divider">/</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">

                <div class="panel panel-default panel-table panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-1">
                                <img src="../../static/img/menu/cta2.png" height="65">
                            </div>
                            <div class="col col-xs-4">
                                <h3>Consulta Tipos de Usuarios</h3>
                            </div>                                    
                        </div>
                        <br>
                        <div class="row">
                            <div class="col col-xs-6">
                                <form method="GET" action="user.php">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-info">
                                                <span id="search_concept">Buscar Por </span> <span class="caret"></span>
                                            </button>                                            
                                        </div>                                        
                                        <input type="text" class="form-control" name="q" placeholder="Buscar usuario" value="<?=isset($q)? $q : ''?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                        </span> 
                                    </div>
                                </form>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="btn-group">
                                    <a class="btn btn-success" href="user.php?action=nuevo&id=0">
                                        <i class="glyphicon glyphicon-plus-sign"> </i>  
                                        Nuevo Registro
                                    </a>
                                    <a href="javascript:window.location.reload();" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-refresh"> </i>
                                        Actualizar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered table-responsive table-striped" id="tdatos">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nombre</th>                                        
                                    <th>Username</th>
                                    <th>Rol</th>
                                    <th>Acción</th>
                                </tr> 
                            </thead>
                            
                            <tbody id="tdetalle">
                                <?php foreach ($this->dao->listar() as $user): ?>
                                    <tr>
                                        <td align="center"><?= $user->idusuario ?></td>
                                        <td align="center"><?= $user->nombre ?></td>
                                        <td align="center"><?= $user->username ?></td>
                                        <td align="center"><?= explode('|', $user->idrol)[1] ?></td>
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
                                                        <a rel="action" data-json='{"entidad":"user","action":"editar","id":"<?= $user->idusuario ?>"}'>
                                                            <i class="glyphicon glyphicon-edit"></i> Editar
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a rel="action" data-json='{"entidad":"user","action":"eliminar","id":"<?= $user->idusuario ?>"}'>
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
                        <div class="row">
                            <div class="col col-xs-4">Page 1 of 5
                            </div>
                            <div class="col col-xs-8">
                                <ul class="pagination hidden-xs pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination visible-xs pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</article>