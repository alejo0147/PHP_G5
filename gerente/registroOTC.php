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
    <form class="formularioRegGerentes" action="../Controladores/ordenTrabajoControlador.php" method="POST">
        <header class="banner-politicas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="tagline">Crear Ordenes de Trabajo</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-sm-6"><br />
                    <label for="validationDefault01" style="color: #71A7AA">ORDEN TRABAJO</label><br />
                    <input id="validationDefault01" name="idOrden" title="Orden de Trabajo"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault01" style="color: #71A7AA">MAQUINA</label><br />
                    <input id="validationDefault01" name="idMaquina" placeholder=" Ingrese ID Maquina" title="Orden de Trabajo"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault01" style="color: #71A7AA">TECNICO</label><br />
                    <input id="validationDefault01" name="idTecnico" placeholder=" Ingrese ID Tecnico" title="Orden de Trabajo"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="validationDefault01" style="color: #71A7AA">TIPO DE ORDEN</label><br />
                    <select id="inlineFormCustomSelectPref" name="tipoOrden"  title="Contrato"  style="width:150px;font-size:15px;border-radius: 4px" REQUIRED>
                        <option selected>Tipo de Orden</option>
                        <option value="Correctivo">Correctivo</option>
                        <option value="Preventivo">Preventivo</option>
                    </select><br /><br />
                    <label for="validationDefault02" style="color: #71A7AA">REEMPLAZO PIEZAS</label><br />
                    <input type="radio" name="piezaReemplazada" value="si">Si</input>&nbsp;
                    <input type="radio" name="piezaReemplazada" value="no" checked>No</input><br>                  
                </div>
                <div class="col-sm-6"><br />
                    <label for="validationDefault02" style="color: #71A7AA">DESCRIPCION</label><br />
                    <textarea id="validationDefault02" name="descripcion" placeholder=" Ingrese Descripcion" title="Nombres"  style="width:550px;height:80px ;font-size:15px;border-radius: 4px" REQUIRED></textarea><br /> 
                    <label for="inlineFormCustomSelectPref" style="color: #71A7AA">FECHA APERTURA</label><br />
                    <input id="inlineFormCustomSelectPref" name="fechaapertura" type="date"  min="2018-01-01" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                    <label for="inlineFormCustomSelectPref" style="color: #71A7AA">FECHA PLANIFICADA</label><br />
                    <input id="inlineFormCustomSelectPref" name="fechaPlanificada" type="date"  min="2018-01-01" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" style="width:150px;font-size:15px;border-radius: 4px" REQUIRED/><br /><br />
                </div>

            </div><br /><br />
        </div>

        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" name="btnRegistrarOrden" value="Guardar"/>&nbsp;&nbsp;
            <input class="btn btn-primary" type="submit" value="Listar"  onClick= "window.location.href = 'listadoGerentes.php'"/>&nbsp;&nbsp;
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
