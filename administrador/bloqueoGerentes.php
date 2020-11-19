<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>NEGOCIACION MINERA - PLAN DE MEJORAMIENTO CESAR MAYA</title>
        <link rel="stylesheet" href="../css/bootstrap-grid.css" type="text/css"></link>
        <link rel="stylesheet" href="../css/bootstrap-reboot.css" type="text/css"></link>
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css"></link>
        <link rel="stylesheet" href="../css/plantilla.css" type="text/css"/>
        <link rel="stylesheet" href="../css/bloqueoGerentes.css" type="text/css"/>
        <link rel="shortcut icon" href="../imagenes/criptominer-favicon (1).ico">

        <script src="../js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
        <div class="container" id="contenedor">
            <div class="container" id="cabecera">
                <div class="cajaTitulo">
                    <div class="logo">
                        <img src="../imagenes/criptominer-favicon.png" class="img-rounded" alt="Negociacion Minera"> 
                    </div>
                    <div class="tituloPagina">
                        <h1 style="font-family: 'Hobo Std'; font-size: 200%;">CASO DE ESTUDIO 'Negociación Minera'</h1>
                    </div>
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="paginaPrincipal.php">Inicio</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="paginaPrincipal.php">Pagina principal <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Configuracion de Gerentes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="listadoGerentes.php">Listado de Gerentes</a>
                                        <a class="dropdown-item" href="registroGerentes.php">Registro de Gerentes</a>                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Configuracion de Técnicos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="listadoTecnicos.php">Listado de Técnicos</a>
                                        <a class="dropdown-item" href="registroTecnicos.php">Registro de Técnicos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="bloqueoTecnicos.php">Bloquear Técnicos</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Configuracion de Maquinas
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="listadoMaquinas.php">Listado de Maquinas</a>
                                        <a class="dropdown-item" href="registroMaquina.php">Registro de Maquinas</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="bajaMaquinas.php">Dar de Baja Maquinas</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php">Salir</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="container" id="cuerpo">
                <div class="cajonListado">
                    <div class="tituloTablaGerentes">
                        <h4>Bloqueo/Desbloqueo Gerentes</h4>
                    </div>
                    <div class="formularioGerenteCambEstado">
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3" style="">
                                    <label for="validationDefault01">N° Documento</label>
                                </div>
                                <div class="col-md-4 mb-3" style="text-align: left;">
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="N° de Identificación" name="nIdentificacion" required>
                                </div>
                                <div class="col-md-4 mb-3" style="text-align: center;">
                                    <button type="submit" class="btn btn-warning btn-lg" name="btnCargarGerente" style="width: 200px;">Cargar Datos</button>
                                </div>
                            </div>
                        </form>
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">N° Documento</label>
                                    <label type="text" class="form-control" id="validationDefault01" placeholder="N° de Identificación" name="nIdentificacion" required/>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Nombres</label>
                                    <label type="text" class="form-control" id="validationDefault02" placeholder="Nombres" name="nombreGerente" required/>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault03">Apellidos</label>
                                    <label type="text" class="form-control" id="validationDefault03" placeholder="Apellidos" name="apellidosGerente" required/>                            
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Estado Gerente</label>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="estadoGerente">
                                        <option selected>Elija el Estado...</option>
                                        <option value="De Planta">activo</option>
                                        <option value="Contratista">inactivo</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3" style="text-align: center;">
                                    <button type="submit" class="btn btn-dark btn-lg" name="btnCambEstGerente" style="width: 300px;">Cambiar Estado</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="footer">Cesar E. Maya Ficha 1438409 Sena 2018</div>
        <?php
        // put your code here
        ?>
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>