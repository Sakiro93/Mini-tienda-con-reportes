<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>E-commerce</title>
        <link href="../../static/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../static/css/login.css" rel="stylesheet" type="text/css"/>
        <style>
            body{

                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100%,100%;
                background-color: #ffffff;
            }
            .logomain:hover{
                background: #0180d1;
                cursor: pointer;
            }
            .cuentahover:hover{
                background-color: #b1dcf8;
            }
            .clavehover:hover{
                background: #b1dcf8;
            }
        </style>
    </head>
    <body>
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
        <div class="span_3_of_2">
            <div >
                <div class="row-fluid">
                    <div class="col-lg-12" style="margin-top: 75px;">
                        <div class="col-lg-offset-8">
                            <div class="card card-container" id="conForm">                                
                                <h4 class="text-center">Ingresa a E-commerce</h4>
                                <img id="profile-img" class="profile-img-card" src="../../static/img/menu/usu.png" />
                                <p id="profile-name" class="profile-name-card"></p>

                                <form class="form-signin" id="frm-login">
                                    <div style="display: none" class="alert alert-danger alert-dismissable" id="error"></div>
                                    <input type="text" id="cuenta" name="cuenta" class="form-control cuentahover" placeholder="Usuario" required autofocus>
                                    <input type="password" id="clave" name="clave" class="form-control clavehover" placeholder="Password" required>               
                                    <button id="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">
                                        <span id="caption">Iniciar Sesion</span>
                                    </button>
                                     <button  class="btn btn-lg btn-warning btn-block btn-signin" onClick="window.location = '../cliente/cliente.php'"
                                        <span id="caption">Crear una Cuenta</span>
                                    </button>
                                </form><!-- /form -->
                                <div class="row-fluid text-center">
                                    <div id='loading' hidden="" >
                                        <img src="../../static/img/menu/loading.gif" >
                                    </div>
                                </div>
                                <p style="margin-top: 7px; font-size: 12px; text-align:center;">
                                    <a href="#">¿Olvido su cuenta o contraseña?</a>
                                </p>
                                <p style="margin-top: 7px; font-size: 12px; text-align:center;">
                                    Para información sobre problemas 
                                    <a href="#">E-commerce@sotf.ec</a>
                                </p>

                            </div><!-- /card-container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../static/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../../static/js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            $(function () {

                $('#frm-login').on({
                    submit: function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: "iniciarsession.php",
                            type: 'POST',
                            data: {
                                cuenta: $('#cuenta').val(),
                                clave: $('#clave').val(),
                                action: 'login'
                            },
                            dataType: 'json',
                            beforeSend: function (xhr) {
                                $('#loading').show('slow');
                            }
                        }).done(function (data) {
                            console.log(data);
                            if (data.resp == 'true1') {
                                window.location = 'admin.php';
                              
                            } else if (data.resp == 'true2') {
                                  window.location = '../articulo/articulo.php?idd=pag';
                            }else{
                                alert('El usuario es incorrecto');
                            }
                            $('#loading').hide('fast');
                        });
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>