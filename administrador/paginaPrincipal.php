<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>

    <title>Menú de administración</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"></link>
    <link rel="stylesheet" href="../css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="../css/magnific-popup.css"></link>
    <link rel="stylesheet" href="../css/admin-style.css"></link>
    <link rel="stylesheet" href="../css/jsfcrud.css"></link>
    <link rel="icon" type="image/png" href="../img/icon_montain.png" ></link>
    <link href="../css/estilos_generales.css" rel="stylesheet"></link>
</head>
<body>
     <div class="container">
            <form>
            <div class="row">
                <div class="tm-left-right-container">
                    <!-- Columna Izquierda: Meú administración menu -->
                    <div class="tm-blue-bg tm-left-column">
                        <div class="tm-logo-div">
                            <img src="../img/admin_icon.png" class= "tm-logo-img" alt="Logo"></img>
                            <h1 class="tm-site-name">Administrador</h1>
                        </div>
                        <nav class="tm-main-nav">

                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="#seccion1" class="tm-nav-item-link">Gerentes</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#seccion2" class="tm-nav-item-link">Técnicos</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#seccion3" class="tm-nav-item-link">Repuestos</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="../index.php" class="tm-nav-item-link">Cerrar Sesión</a>
                                </li>
                                <li class="tm-nav-item">
                                    <p:commandLink id="logout"
                                        actionListener="#{loginBean.logout}"
                                        style="margin-right:20px;"
                                        oncomplete="logout(xhr, status, args)">
                                        <h:outputText value="Cerrar sesión" />
                                    </p:commandLink>
                                </li>
                            </ul>

                        </nav>
                    </div> <!-- Fin columna izquierda - Menú -->

                    <!-- Contenido de la columna derecha: Contenido-->
                    <div class="tm-right-column">
                        <figure>
                            <img src="../img/Banner-Industria-Minera.jpg" alt="Header image" class="img-fluid"></img>
                        </figure>

                        <div class="tm-content-div">
                            <!-- Seccion1 Usuarios-->
                            <section id="seccion1" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Administración de Gerentes</h2>
                                </header>
                                <p>A través de esta sección usted podrá listar, crear, eliminar o actualizar Gerentes registrados en el sistema.
                                    Seleccione el botón correspondiente al requerimiento, siga el menú y presione guardar para actualizar los datos.
                                    La cuenta de Gerente es la forma con la cual se identifica y autentifica a un individuo en el sistema.
                                    Las cuentas de Gerente se identifican por un númerro de cédula y una clave. Solo los administradores pueden acceder
                                    a su registro directo, y tan solo pueden modificar los campos básicos de un usuario.
                                </p>
                                <div class="btn-group">
                                    <strong><button type="button" class="btn-default" id="botonU1" onClick="window.location.href='registroGerentes.php'">Registrar Gerente</button></strong>
                                    <strong><button type="button" class="btn-default" id="botonU2" onClick="window.location.href='listadoGerentes.php'">Listar Gerentes</button></strong>
                                </div>
                            </section>
                            <section>
                                <img src="../img/separador.jpg" class="img-fluid"></img>
                            </section>
                            <!-- Seccion2 Técnicos-->
                            <section id="seccion2" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Registro de técnicos</h2>
                                </header>
                                <p>A través de esta sección usted podrá listar, crear, eliminar o actualizar los datos de los técnicos que realizan los
                                    mantenimientos en cada una de las entidades. Para efecto de rendimiento del sistema en la carga de las listas desplegables
                                    es conveniente mantener este listado al día, y que corresponda a los funcionarios que realmente trabajan en el periodo de
                                    actividades antes del cierre.
                                    <br></br>
                                    Seleccione el botón correspondiente al requerimiento, siga el menú y presione guardar para actualizar los datos.

                                </p>

                                <div class="btn-group">
                                    <strong><button type="button" class="btn-default" id="botonT1" onClick="window.location.href='registroTecnicos.php'">Registrar técnicos</button></strong>
                                        <strong><button type="button" class="btn-default" id="botonT2" onClick="window.location.href='listadoTecnicos.php'">Listar técnicos</button></strong>
                                </div>

                            </section>
                            <section>
                                <img src="../img/separador.jpg" class="img-fluid"></img>
                            </section>
                            <!-- Seccion3 Repuestos -->
                            <section id="seccion3" class="tm-section">
                               <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Administración de repuestos</h2>
                                </header>
                                <p>A través de esta sección usted podrá listar, crear, eliminar o actualizar los repuestos usados para las operaciones de
                                    mantenimiento. El costo de cada elemento debe ser actualizado con respecto a la última compra para que al momento de
                                    liquidar una solicitud de servicio se tengan los valores ajustados a la fecha de corte.
                                    <br></br>
                                    Seleccione el botón correspondiente al requerimiento, siga el menú y presione guardar para actualizar los datos.

                                </p>

                                <div class="btn-group">
                                    <strong><button type="button" class="btn-default" id="botonR1" onClick="window.location.href='registroMaquina.php'">Registrar Repuesto</button></strong>
                                    <strong><button type="button" class="btn-default" id="botonR2" onClick="window.location.href='listadoMaquinas.php'">Listar Repuestos</button></strong>
                                </div>

                            </section>
                            <section>
                                <img src="../img/separador.jpg" class="img-fluid"></img>
                            </section>

                            <footer>
                                <p>Copyright © MINERIA - ADSI - 2018</p>
                            </footer>
                        </div>
                    </div> <!-- Fin de columna Izquierda: Contenido -->
                </div>
            </div> <!-- row -->
            </form>
        </div> <!-- container -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
</body>
</html>
