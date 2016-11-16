<?php
  date_default_timezone_set('America/Bogota');
 ?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#busqueda").keyup(function(){
        var param = $(this).val();
        $.post("buscador_cedula.php", {vlparam: param}, function(data){
          $("#mostrar_nombre").val(data);
        });
      });
    });
    </script>
  </head>
  <body>
    <div class="formulariobono">
      <section>
        <center><h4>Registrar un prestamo</h4></center>
        <form action="../Controlador/registro.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input id="busqueda" type="number" name="usu" autocomplete="off" required/>
              <label class="active" for="first_name2">Cedula: </label>
            </div>

            <div class="input-field col s6">
              <input  id="mostrar_nombre" type="text" class="nombre" required/>
              <label class="active" for="first_name2">Nombre: </label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input type="number" name="prestamo" required/>
              <label class="active" for="first_name2">Valor del prestamo: </label>
            </div>

            <input type="hidden" name="fecha_prestamo" readonly value="<?php echo date('d/m/Y')?>"/>

            <div class="input-field col s6">
              <input type="text" name="plazo_prestamo" class="datepicker" required/>
              <label class="active" for="first_name2">Plazo de pago: </label>
            </div>
          </div>
          <center><button name="action" value="guardarprestamo" class="waves-effect waves-light btn">Registrar</button></center>
        </form>
      </section>
    </div>

    <script type="text/javascript">
    var diaact= '<?php echo date('d') ?>';
    var mesact= '<?php echo date('m') ?>';
    var anhoact= '<?php echo date('Y') ?>';
    $('.datepicker').pickadate({
       selectMonths: true, // que se pueda seleccionar el mes
       selectYears: 2, // que se pueda seleccionar el año y cuantos quiere
       format:'yyyy/mm/dd',
       min: anhoact+mesact+diaact,
     });
    </script>

  </body>
</html>
