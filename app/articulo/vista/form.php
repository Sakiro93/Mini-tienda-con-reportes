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
                                <img src="../../static/img/menu/presentacion.png"  height="65">
                            </div>
                            <div class="col col-xs-6">
                                <h3>Registro de Articulos</h3>
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
                                    <form enctype="multipart/form-data" id="model-frm" class="form-horizontal" >
                                        <div class="row-fluid">  
                                            <input type="hidden" name="model" value="articulo">
                                            <input type="hidden" name="action" value="<?= $action ?>">
                                            <input type="hidden" name="id" value="<?= $this->model->Id ?>">  

                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <input type="hidden" class="form-control " name="foto" maxlength="45" 
                                                           id="foto" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-2" >Foto:</label>
                                                <div class="col-xs-3">
                                                    <img   id="imagen" bgcolor="#222" src='<?= $this->model->Foto ?>' width="300" height="200"  style="border: 4px solid #168E97"/><br><br>
                                                    <label  for="exampleInputFile">Subir Foto</label>
                                                    <input id="cargarimagen" name="imagen" type="file"  >
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Nombre</label>   

                                                <div class="col-xs-7">
                                                    <input required="required" id="nombre" name="nombre" type="text" class="form-control" required placeholder="Ingrese Nombre" maxlength="50" value="<?= $this->model->Nombre ?>">
                                                </div>                                                        
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Descripcion</label>   

                                                <div class="col-xs-7">
                                                    <input required="required" id="descripcion" name="descripcion" type="text" class="form-control" required placeholder="Ingrese Descripcion" maxlength="250" value="<?= $this->model->Descripcion ?>">
                                                </div>                                                        
                                            </div> 

                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Categoria:</label>
                                                <div class="col-xs-3">
                                                    <select name="categoria" id="categoria" class="form-control" required="true">
                                                        <option value="">Seleccione</option> 
                                                        <?php foreach ($this->dao->listarCategoria() as $cat): ?>
                                                            <?php if ($this->model->IdCategoria == $cat->id): ?>
                                                                <option value="<?= $cat->id ?>" selected=""><?= $cat->Descripcion ?> </option>
                                                            <?php else: ?>
                                                                <option value="<?= $cat->id ?>" ><?= $cat->Descripcion ?> </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2">Marca:</label>
                                                <div class="col-xs-3">
                                                    <select name="marca" id="marca" class="form-control" required="true">
                                                        <option value="">Seleccione</option> 
                                                        <?php foreach ($this->dao->listarMarca() as $mar): ?>
                                                            <?php if ($this->model->IdMarca == $mar->id): ?>
                                                                <option value="<?= $mar->id ?>" selected=""><?= $mar->Descripcion ?> </option>
                                                            <?php else: ?>
                                                                <option value="<?= $mar->id ?>" ><?= $mar->Descripcion ?> </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Proveedor:</label>
                                                <div class="col-xs-3">
                                                    <select name="proveedor" id="proveedor" class="form-control" required="true">
                                                        <option value="">Seleccione</option> 
                                                        <?php foreach ($this->dao->listarProveedor() as $pro): ?>
                                                            <?php if ($this->model->IdProveedor == $pro->id): ?>
                                                                <option value="<?= $pro->id ?>" selected=""><?= $pro->Nombre ?> </option>
                                                            <?php else: ?>
                                                                <option value="<?= $pro->id ?>" ><?= $pro->Nombre ?> </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2">Precio:</label>
                                                <div class="col-xs-3">
                                                    <input required="required" id="precio" name="precio" maxlength="7" min="0" type="number" class="form-control" required placeholder="Ingrese Precio" value="<?= $this->model->Precio ?>">
                                                </div>  
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-2">Stock:</label>
                                                <div class="col-xs-3">
                                                    <input required="required" id="stock" name="stock" type="number" maxlength="7" min="0" class="form-control" required placeholder="Ingrese Stock" value="<?= $this->model->Stock ?>">
                                                </div> 
                                                <label class="control-label col-xs-2">Estado</label>
                                                <div class="col-xs-3 text-center">
                                                    <label class="checkbox form-control"><input type="checkbox" name="estado" id="estado" <?= ($this->model->Estado == true ? "checked" : "notchecked") ?> >Activo ?</label>
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
                                                    <button type="reset" onClick="window.window.location.reload()" class="btn btn-info">
                                                        <i class="glyphicon glyphicon-refresh"> </i>
                                                        Restablecer
                                                    </button>   
                                                    <button type="reset" onClick="window.location = 'articulo.php'" class="btn btn-danger">
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
<script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script>
                                                        //Script para ingresar imágenes.
                                                        $(function () {
                                                            var bandera = false;
                                                            if ('<?= $this->model->Foto ?>' === '' && bandera == false) {
                                                                $('#imagen').fadeIn("fast").attr('src', '../../static/img/articulo/no_imagen.png');
                                                                $('#foto').val('../../static/img/articulo/no_imagen.png');
                                                            } else {
                                                                $('#foto').val('<?= $this->model->Foto ?>');
                                                            }
                                                            $('#cargarimagen').on('change', function () {
                                                                var rutaimg = $(this).val();
                                                                var extension = rutaimg.substring(rutaimg.length - 3, rutaimg.length);
                                                                if (extension.toLowerCase() === 'png' || extension.toLowerCase() === 'jpg') {
                                                                    $('#imagen').fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
                                                                    bandera = true;
                                                                } else {
                                                                    $(this).val('');
                                                                    if ('<?= $this->model->Foto ?>' == '') {
                                                                        $('#imagen').fadeIn("fast").attr('src', '../../static/img/articulo/no_imagen.png');
                                                                    } else {
                                                                        $('#imagen').fadeIn("fast").attr('src', '<?= $this->model->Foto ?>');
                                                                    }
                                                                    alert('Ingrese solo imágenes');
                                                                }

                                                            });
                                                        });
</script> 