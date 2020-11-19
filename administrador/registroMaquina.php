<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mineria</title>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="icon" type="image/png" href="../img/icon_montain.png" ></link>
        <link href="../css/bootstrap.min.css" rel="stylesheet"></link>
        <link href="../css/estilos_generales.css" rel="stylesheet"></link>

        <script src="../js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
</head>
<body>
    <form class="formularioRegGerentes" action="../Controladores/MaquinariaControlador.php" method="POST">
        <header class="banner-politicas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="tagline">
                            <p>Ingresar Repuestos o</p>
                            <p>Maquinas</p>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-sm-6"><br />

                    <label for="validationDefault01" style="color: #71A7AA">TIPO MAQUINA</label><br />
                    <input id="validationDefault01" name="tipoMaquina" maxlength="10" placeholder=" Tipo de Maquina" title="Id Usuario"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault02" style="color: #71A7AA">REFERENCIA</label><br />
                    <input id="validationDefault02" name="referenciaMaquina" placeholder=" Referencia" title="Nombres"  style="width:350px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                </div>
                <div class="col-sm-6"><br />
                    <label for="validationDefault03" style="color: #71A7AA">SERIAL</label><br />
                    <input id="validationDefault03" name="serialMaquina" placeholder=" Ingrese Serial" title="Email"  style="width:350px;font-size:15px;border-radius: 4px"style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="inlineFormCustomSelectPref" style="color: #71A7AA">FECHA INGRESO</label><br />
                    <input id="inlineFormCustomSelectPref" name="fechaIngreso" type="date"  min="2018-01-01" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <br />

                </div>

            </div><br /><br />
        </div>

        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" name="btnRegistrarMaquina" value="Guardar"/>&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" value="Listar"  onClick= "window.location.href = 'listadoMaquinas.php'"/>&nbsp;&nbsp;
            <input class="btn btn-warning" type="button" value="Regresar" onClick= "window.location.href = 'paginaPrincipal.php'"/>
        </div>

        <footer>
            <div class="row" id = "registro">
                <div class="col-lg-12">
                    <center><p>Copyright © MINERIA - ADSI - 2018</p></center>
                </div>
            </div>
        </footer>
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </form>
</body>
</html>
