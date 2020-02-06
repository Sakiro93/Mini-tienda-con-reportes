<nav class="navbar navbar-blue navbar-fixed-top" role="navigation" style="background: #0180d1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="row">
            <div class="col-md-6">
              
                <img class="img-rounded logomain"  width="100px" height="60px" style="margin-left: 110px; margin-top: 7px;"src="../../static/img/menu/comercio.png" />  
            </div>
            <div class="col-md-6">
                <p style="margin-top: 18px;   font-size: 33px; text-align:center; font-family: initial;">
                    E-commerce
                </p>
            </div>
        </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
        <ul class="nav navbar-nav navbar-right" style="margin-right:1%">
           
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 12px;background:#0180d1; font-size: 20px;"><span
                        class="glyphicon glyphicon-user"></span> <?= ucwords($user->lognombre) ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php
                        if(!isset($sal)){
                            $sal = '';
                        }
                    ?>
                    <li><a href="<?=$sal?>salir.php"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>