<article id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="row-fluid">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li><a href="../inicio/admin.php">Inicio</a><span class="divider"></span></li>
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
                            <div class="col col-xs-6">
                                <h3>Registro de Roles</h3>
                            </div>                                      
                        </div>                     
                    </div>
                    <div class="panel-body text-center">
                        <div class="col col-lg-10 col-lg-offset-1">
                            <div class="panel panel-default panel-primary" style="background: #eee">
                                <div class="panel-heading">
                                    <strong>Ficha de Registro</strong>
                                </div>
                                <div class="panel-body">                 
                                    <form id="model-frm" class="form-horizontal">
                                        <div class="row-fluid">  
                                            <input type="hidden" name="model" value="rol">
                                            <input type="hidden" name="action" value="<?= $action ?>">
                                            <input type="hidden" name="id" value="<?= $this->model->idrol ?>">  
                                            
                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Rol</label>   
                                                <div class="col-xs-7">
                                                    <input required="required" name="descripcion" type="text" class="form-control" required placeholder="Ingrese Descripcion" value="<?= $this->model->descripcion ?>">
                                                </div>                                                        
                                            </div> 
                                        </div>
                                        <div class="row-fluid">
                                            <div class="form-group">
                                                <div class="col col-xs-9 col-xs-offset-2">
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="glyphicon glyphicon-save"> </i> 
                                                        Guardar Registro
                                                    </button>                                                            
                                                    <button type="reset" class="btn btn-info">
                                                        <i class="glyphicon glyphicon-refresh"> </i>
                                                        Restablecer
                                                    </button>   
                                                    <button type="reset" onClick="window.location ='rol.php'" class="btn btn-danger">
                                                        <i class="glyphicon glyphicon-remove"> </i>
                                                        Cancelar
                                                    </button> 
                                                </div>                                    
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>