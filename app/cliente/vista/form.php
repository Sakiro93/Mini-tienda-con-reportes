 <nav class="navbar navbar-blue navbar-fixed-top" role="navigation" style="background: #0180d1  ; padding-bottom: 3px; padding-top: 5px;" ><!--#3f51b5  #ededf4   width="280px" height="50px"  <img style="position: fixed; margin-top: -37px" class="img-rounded" width="400px" height="115px" src="../../static/img/menu/logomaintrasparente.png" />-->
            <div class="navbar-header">
                <div class="row">
                    <div class="col-md-6">

                        <img class="img-rounded logomain"  width="100px" height="60px" style="margin-left: 110px; margin-top: 7px;"src="../../static/img/menu/comercio.png" />  
                    </div>
                    <div class="col-md-6">
                        <p style="margin-top: 18px; background:#0180d1; color: #ffffff; margin-left: 10px; font-size: 33px; text-align:center;  font-family: initial;">
                            E-commerce
                        </p>
                    </div>
                </div>
            </div>
        </nav>
<article id="content" >
    <div class="container-fluid">
        <div class="row">

            <div class="col col-lg-4 col-lg-offset-4">

                <div class="panel panel-default panel-primary" style="background: #eee" >
                    <div class="panel-heading text-center">
                        <div class="row">
                            <div class="col-md-6">

                                <img class="img-rounded logomain"  width="80px" height="50px" style="margin-left: 80px; margin-top: -6px;"src="../../static/img/menu/comercio.png" />  
                            </div>
                            <div class="col-md-6">
                                <p style="margin-top: 2px; color: #ffffff; margin-left: -140px; font-size: 24px; text-align:center;  font-family: initial;">
                                    E-commerce
                                </p>
                            </div>
                        </div>          
                    </div>
                    <div class="panel-body text-center">
                        <div class="col col-lg-12 ">

                            <form id="model-frm" class="form-horizontal">
                                <div class="row-fluid">  
                                    <input type="hidden" name="model" value="cliente">
                                    <input type="hidden" name="action" value="nuevo">
                                    <input type="hidden" name="id" value="0">  
                                    <strong> <h2> Crear Cuenta</h2> </strong>

                                    <div class="form-group text-center">
                                        <label class="control-label col-xs-3" style="margin-left: 30px;"> Nombre</label>                                                                                           
                                    </div> 
                                    <div class="form-group">

                                        <div class="col-xs-10 col-lg-offset-1">
                                            <input required="required" name="nombre" type="text" class="form-control" required placeholder="Nombre" value="">
                                        </div>                                                        
                                    </div> 

                                    <div class="form-group text-center">
                                        <label class="control-label col-xs-3 " style="margin-left: 30px;">Apellido</label>                                                                                           
                                    </div> 
                                    <div class="form-group">

                                        <div class="col-xs-10 col-lg-offset-1">
                                            <input required="required" name="apellido" type="text" class="form-control" required placeholder="Apellido" value="">
                                        </div>                                                        
                                    </div> 
                                    <div class="form-group text-center">
                                        <label class="control-label col-xs-7 " style="margin-left: 12px;">Teléfono (fijo o móvil)</label>                                                                                           
                                    </div> 
                                    <div class="form-group">

                                        <div class="col-xs-10 col-lg-offset-1">
                                            <input required="required" name="telefono" type="text" class="form-control" required placeholder="Teléfono" value="">
                                        </div>                                                        
                                    </div> 

                                    <div class="form-group text-center">
                                        <label class="control-label col-xs-3 " style="margin-left: 20px;">Correo</label>                                                                                           
                                    </div> 
                                    <div class="form-group">

                                        <div class="col-xs-10 col-lg-offset-1">
                                            <input required="required" name="correo" type="email" class="form-control" required placeholder="Apellido" value="">
                                        </div>                                                        
                                    </div> 

                                    <div class="form-group text-center">
                                        <label class="control-label col-xs-4 " style="margin-left: 24px;">Contraseña</label>                                                                                           
                                    </div> 
                                    <div class="form-group">

                                        <div class=" col-xs-7 col-lg-offset-1">
                                            <input required="required" id="usuclave" minlength="6" name="usuclave" type="password" class="form-control col-xs-4" required placeholder="Mínimo 6 caracteres" value="">
                                        </div>

                                        <div class=" col-xs-2">
                                            <label class="control-label  checkbox"><input type="checkbox" id="mostrarp" notchecked>Mostrar</label>
                                        </div>   

                                    </div> 
                                    <div class="form-group ">

                                    </div> 


                                </div>
                                <div class="row-fluid">
                                    <div class="form-group">
                                        <div class="col-xs-10 col-xs-offset-1">
                                            <button class="btn btn-primary col-md-12" type="submit">
                                                <i class="glyphicon "> </i> 
                                                Crear Cuenta
                                            </button>                                                            

                                        </div>                                    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-10 col-xs-offset-1">

                                            <button type="reset" onClick="window.location = '../../app/principal/login.php'" class="btn btn-danger col-md-12">
                                                <i class="glyphicon "> </i>
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
