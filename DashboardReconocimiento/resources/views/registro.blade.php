<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro de usuario</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="archivosCSS/login/login.css" rel="stylesheet" media="all">
    <link href="archivosCSS/registro/registro.css" rel="stylesheet" media="all">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
  </head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div id="fondo_card" class="card card-1">
            <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ingresa la informaciòn</h2>
                  
                    <form>
                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
                      </div><br>
                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido">
                      </div><br>

                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                      </div><br>

                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="user" placeholder="Nombre de usuario">
                      </div><br>


                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                      </div><br>

                      <div class="input-group">
                        <span id="icono_group" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Verificar contraseña">
                      </div><br>

                      <button class="btn btn-default" id="boton_login">Registrarse</button>
                      
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="archivosJS/login/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
