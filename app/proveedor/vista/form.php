<article id="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
              <?php
                require '../principal/navegador.php';
                ?>  


                <div class="panel panel-default panel-table panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-1">
                                <img src="../../static/img/menu/proveedor1.png"  height="65">
                            </div>
                            <div class="col col-xs-6">
                                <h3>Registro de Proveedores</h3>
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
                                            <input type="hidden" name="model" value="proveedor">
                                            <input type="hidden" name="action" value="<?= $action ?>">
                                            <input type="hidden" name="id" value="<?= $this->model->Id ?>">  

                            <!-- 1 -->
                                         


                                            <!-- 2 -->
                                            <div class="form-group">

                                                <label class="control-label col-xs-3">Nombre</label>   
                                                <div class="col-xs-6">
                                                    <input required="required" name="nombre" type="text" class="form-control" required placeholder="Ingrese Nombre" value="<?= $this->model->Nombre ?>">
                                                </div> 
                                               
                                            </div> 
                                            
                                               <div class="form-group">

                                                <label class="control-label col-xs-3">Ruc</label>   
                                                <div class="col-xs-6">
                                                    <input required="required" name="ruc" type="text"
                                                    class="form-control" required placeholder="Ingrese Ruc"
                                                    maxlength="13"
                            
                                                    title="Campo debe tener 13 dígitos numéricos"
                                                    value="<?= $this->model->Ruc ?>">
                                                </div> 
                                                
                                            </div>   
                                          

                                            <!-- 3 -->
                                            <div class="form-group">

                                                <label class="control-label col-xs-3">Direccion</label>   
                                                <div class="col-xs-6">
                                                    <input required="required" name="direccion" type="text" class="form-control" required placeholder="Ingrese Direccion" value="<?= $this->model->Direccion ?>">
                                                </div> 
                                               
                                            </div> 


                                            <!-- 4 -->
                                            <div class="form-group">

                                                <label class="control-label col-xs-3">Telefono</label>   
                                                <div class="col-xs-6">
                                                    <input required="required" name="telefono" type="text"
                                                    class="form-control" required placeholder="Ingrese Telefono"
                                                    pattern="[0-9]{7, 15}"
                                                    value="<?= $this->model->Telefono ?>">
                                                </div> 
                                               
                                            </div> 
                                            
                                                 <div class="form-group">

                                                <label class="control-label col-xs-3">Correo</label>   
                                                <div class="col-xs-6">
                                                    <input required="required" name="correo" type="email"
                                                    class="form-control" required placeholder="Ingrese Correo"
                                                    pattern="[0-9]{7, 15}"
                                                    value="<?= $this->model->Correo ?>">
                                                </div> 
                                               
                                            </div> 
                                            
                                                        <div class="form-group">
                                                <label class="control-label col-xs-3">Estado</label>
                                                <div class="col-xs-3 text-center">
                                                    <label class="checkbox form-control"><input type="checkbox" name="estado" <?= ($this->model->Estado == true ? "checked" : "notchecked") ?> >Activo ?</label>
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
                                                    <button type="reset" onClick="window.location = 'proveedor.php'" class="btn btn-danger">
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