<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MINERA - Index</title>
        <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css"></link>
        <link rel="stylesheet" href="css/bootstrap-reboot.css" type="text/css"></link>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"></link>
        <link rel="stylesheet" href="css/index.css" type="text/css"/>
        <link rel="shortcut icon" href="img/icon_montain.png">

        <script src="js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
        <div class="container-fluid" id="contenedor">
            <div class="container" id="cuerpo">
                <div class="login-container">
                    <form action="Controladores/IngresoControlador.php" class="form-login" method="post">   
                        <center><h1 style="color: gold">LOGIN</h1></center>
                        <strong><label for="login-input-user" style="color: gold">CÉDULA</label></strong><br />
                        <input id="login-input-user" class="form-group" type="text" placeholder=" Ingrese Cedula" name="nIdentificacion" required style="border-radius: 4px;width: 250px;height: 30px"><br />
                        <strong><label for="login-input-password" style="color: gold">CLAVE</label></strong><br />
                        <input id="login-input-password" class="form-group" type="password" placeholder=" Ingrese Clave" name="pass" required style="border-radius: 4px;width: 250px;height: 30px"><br /><br />
                        <input type="hidden" name="login" value="1" />
                        <input class="btn" type="submit" name="btnIngresar" value="Ingresar" style="background: #CBCBCB">
                    </form>
                    <div class="col-lg-12">
                        <center><p style="color: #FFF">Copyright © MINERIA - ADSI - 2018</p></center>
                    </div>
                </div>
            </div>
        </div> 

        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/popper.min.js"></script>
    </body>
</html>