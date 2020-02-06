
<?php
$user = $_SESSION['_USER_'];
if (!isset($q)) {
    $q = '';
}
?>

<div id="comprar" class="modal fade">
    <div class="modal-dialog">   
        <div class="modal-content"> 
            <div class="modal-header bg-secondary">
                <h3 class="text-center" ><input type="text"  style="border:0; font-weight: bold" class="text-center" name="nomb"
                                                id="nomb" value ="" readonly="true"></h3>        
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="model-compra"> 
                    <div class="form-group">
                        <input type="hidden" name="model" value="venta">
                        <input type="hidden" name="model2" value="articulo">
                        <input type="hidden" name="action" value="nuevo">
                        <input type="hidden" name="idusu" id="idusu"  value=<?= $user->logId ?> />
                        <input type="hidden" name="idart" id="idart"  value='' />
                        <input type="hidden" name="precant" id="precant"  value='' />
                        <label class="control-label col-md-2">Descripción: </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="des" style="border:0"
                                   id="des" value ="" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Marca: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="marc" style="border:0"
                                   id="marc" value ="" readonly="true">
                        </div>
                        <label class="control-label col-md-2">Stock: </label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="stoc" style="border:0"
                                   id="stoc" value ="" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Seleccione Cantidad: </label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="cant" style="border:0"
                                   id="cant" value ="" min="1" max="24" maxlength="2" required="required">
                        </div>
                        <label class="control-label col-md-2">Total: </label>
                        <span class="control-label col-md-1">
                            $
                        </span>
                        <div class="col-md-3">

                            <input type="number" class="form-control" name="prec" style="border:0"
                                   id="prec" value ="" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Digite su Número de Cuenta: </label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="cuent" 
                                   id="cuent" value ="" min="1111111111111111" max="9999999999999999" placeholder="Número de Cuenta" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Banco: </label>
                        <div class="col-md-4">
                            <select name="banc" id="banc" class="form-control" required="true">
                                <option value="">Seleccione</option> 
                                <?php foreach ($this->dao->listarBanco() as $ban): ?>
                                    <option value="<?= $ban->id ?>" ><?= $ban->Descripcion ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <label class="control-label col-md-2">Tipo de Cuenta: </label>
                        <div class="col-md-4">
                            <select name="tip" id="tip" class="form-control" required="true">
                                <option value="">Seleccione</option> 
                                <?php foreach ($this->dao->listarTipo() as $tip): ?>
                                    <option value="<?= $tip->id ?>" ><?= $tip->Descripcion ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="btn-group">
                        <label class="control-label col-md-8">¿Desea Realizar la Compra?</label>
                        <div class=" control-label col-xs-2">
                            <button type="submit" class=" btn btn-info "><span class="fa fa-check-square"></span>SI</button>
                        </div>
                        <div class="control-label col-xs-2">
                            <a href="#" data-dismiss="modal" class="btn btn-danger"><span class="fa fa-arrow-left">NO</a>
                        </div>

                    </div>
                </form>    
            </div>

        </div>
    </div>
</div>

<article id="content">
    <div class="col-lg-12 ">

        <div class="container">  


            <div class="panel panel-default ">
                <div class="panel-heading text-center ">
                    <div class="row">

                        <div class="col col-xs-1 text-right">
                            <div class="btn-group">


                                <img class="img-rounded logomain"  width="55px" height="35px" style="margin-left: 30px; margin-top: -1px;"src="../../static/img/menu/comercio.png" />  

                            </div>
                        </div>
                        <div class="col col-xs-8">
                            <form method="GET" action="articulo.php">
                                <div class="input-group">

                                    <div class="input-group-btn search-panel">
                                        <button type="button" class="btn btn-info">
                                            <span id="search_concept">Busqueda General </span>                                           
                                    </div>     
                                    <input type="hidden" class="form-control" name="idd" placeholder="" value="pag">
                                    <input type="text" class="form-control" name="q" placeholder="Buscar Artículos" value="<?= $q ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning"><span class="glyphicon glyphicon-search"></span></button>
                                        <a  href="articulo.php?idd=pag" class="btn btn-info">
                                            <i class="glyphicon glyphicon-refresh"></i> Recargar</a>  
                                    </span>

                                </div>
                            </form>
                        </div>

                        <div class="col col-xs-1 text-right">
                            <a  href="../../app/venta/venta.php?idd=<?= $user->logId ?>" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-ok"></i> Compras Realizadas</a>  
                        </div>

                    </div>

                </div>

                <div class="panel-body">
                    <div class="container-fluid " style="background-color:whitesmoke">
                        <div style="" class="row-fluid " id="menu">      
                            <?php foreach ($this->dao->listar() as $articulo): ?>
                                <?php if ($articulo->Estado == TRUE): ?>
                                    <a class="icon sbox well-sm">
                                        
 
                                        <div class="iconimage">
                                            <div class="pd">
                                                <img src="<?= $articulo->Foto ?>" border="0">
                                            </div>
                                        </div>
                                        <div class="iconname">
                                            <div class="pd">
                                                <h4 class="tituloicon"><?= $articulo->IdMarca ?></h4>
                                                <span class="icondesc"><?= $articulo->Descripcion ?></span>
                                                <h4 class="icondescs" > Desde $ <?= $articulo->Precio ?></h4>
                                                <div>
                                                    <button id="openmodal" data-toggle="modal" href="#comprar" data-idart="<?= $articulo->Id ?>" data-nomb="<?= $articulo->Nombre ?>" data-des="<?= $articulo->Descripcion ?>" data-marc="<?= $articulo->IdMarca ?>" data-stoc="<?= $articulo->Stock ?>" data-prec="<?= $articulo->Precio ?>"  class="btn btn-success btn-sm"><i class="glyphicon glyphicon-shopping-cart"></i> Comprar</button>
                                                </div> 
                                            </div>
                                        </div>
                                    </a> 
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>



        </div>
    </div>
</article>



<script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function (e) {
        $('#comprar').on('show.bs.modal', function (e) {
            var idart = $(e.relatedTarget).data().idart;
            var des = $(e.relatedTarget).data().des;
            var nomb = $(e.relatedTarget).data().nomb;
            var marc = $(e.relatedTarget).data().marc;
            var stoc = $(e.relatedTarget).data().stoc;
            var prec = $(e.relatedTarget).data().prec;

            $(e.currentTarget).find('#cuent').val('');
            $(e.currentTarget).find('#banc').val('');
            $(e.currentTarget).find('#tip').val('');
            $(e.currentTarget).find('#cant').val('1');
            $(e.currentTarget).find('#idart').val(idart);
            $(e.currentTarget).find('#des').val(des);
            $(e.currentTarget).find('#nomb').val(nomb);
            $(e.currentTarget).find('#marc').val(marc);
            $(e.currentTarget).find('#stoc').val(stoc);
            $(e.currentTarget).find('#precant').val(prec);
            $(e.currentTarget).find('#prec').val(prec);


        });

        $('#cant').on('change', function () {
            var cant = $('#cant').val();
            var precant = $('#precant').val();
            var stock = $('#stoc').val();
            var nuevoprec = cant * precant;

            if (parseInt(cant) > parseInt(stock)) {
                alert("El Valor supera al Stock--> cantidad: "+cant+ " - stock: "+stock);
                $('#cant').val(stock);
            }

            if (cant !== '' && parseInt(cant) > 0) {
                $('#prec').val(nuevoprec);
            } else {
                $('#prec').val(precant);
            }
        });

    });


</script>

