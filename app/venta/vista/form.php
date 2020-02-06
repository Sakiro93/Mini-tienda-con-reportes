<?php 
 
        require_once ('dompdf/dompdf_config.inc.php');
$codigoHTML = '
<html>
    <head></head>
    <body>
    
<div class="panel panel-primary" style="border: 0.30px solid black; border-radius: 105px;">
        <div class="panel-header">
    </div>
<div class="panel-body">
 <div class="navbar-header" style="text-align:center;">
        <div class="row">
            <div class="col-md-8">
              
                <img class="img-rounded logomain"  width="80px" height="60px" style="margin-left: 50px; margin-top: 7px;"src="../../static/img/menu/comercio.png" />  
            </div>
            <div class="col-md-6">
                <p style="margin-top: 10px;   font-size: 33px; text-align:center; font-family: initial;">
                    <h2>E-commerce: "Centro Comercial Online"</h2>
                     <h4>Direccion: Av. 17 de Septiembre y Jaime Roldos  </h4>  
                     <h4>Telefonos: 098372782 - 049823777  </h4>  
                     <h4>tiendaonline@outlook.com</h4>  
                </p>
                
    
            </div>
        </div>
    </div>
    

</div>
</div>
<br/>




   




    <div class="panel-body" style="text-align:center;">
    <table class="table table-hover table-bordered table-responsive table-striped" border="1" cellpadding="0" cellspacing="0" bgcolor="#fcfcfc" id="tdatos">
                            <thead>
                                <tr>'; ?> 
<?php
$cabecera = array("Factura", "Usuario", "Articulo", "N. Cuenta", "Banco", "Tipo de Cuenta", "Cantidad", "Total", "Fecha");
foreach ($cabecera as $datos):
    ?> 
    <?php $codigoHTML .= "<th class='text-center' bgcolor='#dffdf8'>" .$datos. "</th>"; ?> 
<?php endforeach; ?> 
<?php $codigoHTML .= "    
                                </tr> 
                            </thead>
                            <tbody id='tdetalle'>"; ?> 

        <?php $codigoHTML .= "
                                        <tr>
                                            <td align='center'>" . $this->model->Id . "</td>
                                            <td align='center'>" . $this->model->IdUsuario . "</td>
                                            <td align='center'>" . $this->model->IdArticulo . "</td>
                                            <td align='center'>" . $this->model->Cuenta . "</td>
                                            <td align='center'>" . $this->model->IdBanco . "</td>
                                            <td align='center'>" . $this->model->IdTipo . "</td>
                                            <td align='center'>" . $this->model->Cantidad . "</td>
                                            <td align='center'>" . $this->model->Total . "</td>
                                            <td align='center'>" . $this->model->Fecha . "</td>
                                      
                                            
                                        </tr>"; ?>



    
<?php $codigoHTML .= "
</tbody>
</table>
</div>
<div  style='text-align:center;'>
 <p>
	GRACIAS POR SU COMPRA !!!
</p>
<p>
	<b>Visitenos en: </b><a href='https://ecommerce.com.ec' target='_blank' bgcolor='blue'>ecommerce.com.ec</a>
</p>
<p>
	<b>Servicio y atencion: </b><a href='https://ecommerce@gmail.com' target='_blank' bgcolor='blue'>ecommerce@gmail.com</a>
</p>
</div>



</body>
</html>";
$codigoHTML= utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit", "128M");
$dompdf->render();
ob_end_clean ();
$dompdf->stream("Factura".$this->model->Id.".pdf");
?>
