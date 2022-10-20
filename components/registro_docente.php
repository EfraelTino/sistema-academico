<?php 
  //INCLUIMOS LO QUE NECESITAMOS
  include ('../include/conexion.php');
  include ('../include/busqueda.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="../Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../Gentella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="../Gentella/vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="../Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="../Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="../Gentella/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <link href="../Gentella/vendors/cropper/dist/cropper.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <style>
    input[type=number]::-webkit-outer-spin-button,

    input[type=number]::-webkit-inner-spin-button {

      -webkit-appearance: none;

      margin: 0;

    }



    input[type=number] {

      -moz-appearance: textfield;

    }
  </style>
  <div class="main_container">

    <!--MENU SUPERIOR -->
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
        </div>
      </div>
    </div>
    <!-- /page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Registro de Docentes -IESTPH</h3>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Registrar docente<small></small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left" action="../operaciones/resgistrar_docente.php" method="POST" id="formulario_docente">
                  <span class="section">Información del docente </span>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">DNI<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="dni_docente" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="dni" placeholder="Ingrese su DNI" required="" type="number" maxlength="8" ;>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nombres y apellidos<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="email" name="nombre" required="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Fecha de Nacimiento<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" id="email2" name="fecha" data-validate-linked="email" required="" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Dirección<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="number" name="direccion" required="" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Correo<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="email" id="website" name="correo" required="" placeholder="youremail@example.com" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Teléfono<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="occupation" type="number" name="telefono" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12 telefono" placeholder="915 068 001" id="telefono" maxlength="9" />
                    </div>
                  </div>
                  <div class="item form-group">
                    <label for="password" class="control-label col-md-3">Género:</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select type="number" name="genero" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" id="genero">
                      <option value="">Seleccionar Género</option>
                        <?php
                        //ENVIAMOS LO QUE NUESTRA FUNCION PIDE EN ESTE CASO LA CONEXION 
                        $buscar_genero = buscarGenero($conexion);
                        //HACEMOS NUESTRO BUCLE
                        //
                        while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                          //IMPRIMIMOS NUESTRO ID COMO PRUEBA
                          //echo $res_b_genero['id'];
                          ?>
                            <option value='<?php echo $res_b_genero ['id'] ?>'><?php echo $res_b_genero ['ref_genero'] ?></option>
                          <?php 
                        };
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Educacion: </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="password2" type="text" name="condicion" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Ocupacion Laboral:
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="telephone" name="nivel" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Cargo:
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="cargo" required="" name="cargo" class="form-control col-md-7 col-xs-12" type="number">
                        <option value="">Seleccionar Cargo</option>
                        
                      <?php 
                        $buscar_cargo = buscarCondicion($conexion);
                        while ($res_b_cargo = mysqli_fetch_array($buscar_cargo)) {
                         ?>
                         <option value='<?php echo $res_b_cargo['id']?>'><?php echo $res_b_cargo['descripcion']?></option>
                         <?php
                        }
                      ?>
                      </select>
                    </div>
                    <br><br>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn btn-danger" onClick="limpiar()" type="reset">Cancelar</button>
                        <button id="send" type="submit" class="btn btn-success">Registrar</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery -->
    <script src="../Gentella/"></script>
    <script src="../Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../Gentella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="../Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../Gentella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="../Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./Gentella/build/js/custom.min.js"></script>
    <script src="../js/campos-especificos.js"></script>
</body>

</html>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap Colorpicker -->
<script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- jquery.inputmask -->
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- jQuery Knob -->
<script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Cropper -->
<script src="../vendors/cropper/dist/cropper.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script>
  $('#myDatepicker').datetimepicker();

  $('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
  });

  $('#myDatepicker3').datetimepicker({
    format: 'hh:mm A'
  });

  $('#myDatepicker4').datetimepicker({
    ignoreReadonly: true,
    allowInputToggle: true
  });

  $('#datetimepicker6').datetimepicker();

  $('#datetimepicker7').datetimepicker({
    useCurrent: false
  });

  $("#datetimepicker6").on("dp.change", function(e) {
    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
  });

  $("#datetimepicker7").on("dp.change", function(e) {
    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
  });
</script>
</body>

</html>