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
    <form class="formularioRegGerentes" action="../Controladores/usuarioControlador.php" method="POST">
        <header class="banner-tecnicos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="tagline">Crear Tecnicos</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-sm-6"><br />

                    <label for="validationDefault01" style="color: #71A7AA">CÉDULA</label><br />
                    <input id="validationDefault01" name="nIdentificacion" maxlength="10" placeholder=" Ingrese Cedula" title="Id Usuario"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault02" style="color: #71A7AA">NOMBRES</label><br />
                    <input id="validationDefault02" name="nombreTecnico" placeholder=" Ingrese Nombres" title="Nombres"  style="width:350px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault03" style="color: #71A7AA">APELLIDOS</label><br />
                    <input id="validationDefault03" name="apellidosTecnico" placeholder=" Ingrese Apellidos" title="Apellidos" style="width:350px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                </div>
                <div class="col-sm-6"><br />
                    <label for="inputEmail3" style="color: #71A7AA">CORREO</label><br />
                    <input id="inputEmail3" name="correoTecnico" placeholder=" Ingrese Correo" title="Email"  style="width:350px;font-size:15px;border-radius: 4px"style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="inputPassword5" style="color: #71A7AA">CLAVE</label><br />
                    <input id="inputPassword5" name="passTecnico" type="password" maxlength="10" placeholder=" Ingrese Clave" title="Clave"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="inlineFormCustomSelectPref" style="color: #71A7AA">CONTRATO</label><br />
                    <select id="inlineFormCustomSelectPref" name="tipoContratoTecnico"  title="Contrato"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED>
                        <option selected>Elija el tipo de contrato...</option>
                        <option value="De Planta">De Planta</option>
                        <option value="Contratista">Contratista</option>
                    </select><br /><br />

                </div>

            </div><br /><br />
        </div>

        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" name="btnRegistrarTecnico" value="Guardar"/>&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" value="Listar"  onClick= "window.location.href = 'listadoTecnicos.php'"/>&nbsp;&nbsp;
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
