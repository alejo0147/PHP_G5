<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mineria</title>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="icon" type="image/png" href="../img/icon_montain.png" ></link>
        <link href="../css/bootstrap.min.css" rel="stylesheet"></link>
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"></link>
        <link href="../css/estilos_generales.css" rel="stylesheet"></link>

        <script src="../js/bootstrap.bundle.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
        <header class="banner-administracion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="tagline">Lista de Gerentes</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-sm-10"><br />
                    <table class="table table-bordered">
                        <thead style="background-color: #31B0D5">
                            <tr>
                                <th scope="col">CÉDULA</th>
                                <th scope="col">NOMBRES</th>
                                <th scope="col">APELLIDOS</th>
                                <th scope="col">CORREO</th>
                                <th scope="col">CONTRATO</th>
                                <th scope="col">ESTADO</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #BAE4F1">
                            <?php
                            $rol = 'gerente';
                            $conn = mysqli_connect('localhost', 'root', '', 'minera');
                            $sql = "SELECT documento,nombres,apellidos,correo,tipoContrato,estado FROM usuarios WHERE rol = '" . $rol . "' Order By estado ASC";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "
                                          <tr>
                                                 <td>" . $row[0] . "</td>
                                                 <td>" . $row[1] . "</td>
                                                 <td>" . $row[2] . "</td>
                                                 <td>" . $row[3] . "</td>
                                                 <td>" . $row[4] . "</td>
                                                 <td>" . $row[5] . "</td>
                                          </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div><br /><br />
                <div class="formularioGerenteCambEstado">
                        <form action="../Controladores/usuarioControlador.php" method="post" class="form-login">
                            <div class="form-col">
                                <div class="col-md-2" style="text-align: center;">
                                    <label for="validationDefault01">N° Cédula</label><br />
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="N° de Cédula" name="nIdentificacion" required/><br />
                                    <button type="submit" class="btn btn-danger btn-lg" name="btnCambEstadoGerente" style="width: 170px;">Cambiar Estado</button>
                                </div>
                            </div>
                        </form>
                    </div>  
            </div><br /><br />

        </div>

        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="btn btn-warning" type="button" value="Regresar" onClick="window.location.href = 'paginaPrincipal.php'"/>&nbsp;&nbsp;
            <input class="btn btn-info" type="button" value="Nuevo" onClick="window.location.href = 'registroGerentes.php'"/>
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
    </body>
</html>
