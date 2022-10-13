<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio de sesión </title>

    <!-- Bootstrap -->
    <link href="./Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="./Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <!-- DONDE VA A ESTAR NUESTRA LOGICA -->
            <form action="./operaciones/iniciar_sesion.php" method="POST">
              <h1> Inicio de sesión </h1>
              <div>
                 <!--  INCLUIR LOS NOMBRES NO OLVIDARSE PARA LLAMARLO EN NUESTRA LOGICA -->
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                                <!-- PARA QUE VALIDE DE MANERA AUTO  -->
              <button type="submit" >Iniciar sesión </button>
                <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>
              <div class="separator">
                <!--<p class="change_link">New to site?-->
                  <a href="./crear_usuario.php" class="to_register"> Crear una nueva cuenta</a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> Instituto de Educación Superior Tecnológico Público "Huanta"</h1>
                  <p>©2022 Todos los derechos reservados. Implementado por el equipo de desarrolladores de software de este prestigioso Instituto. Privacidad y Términos</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
