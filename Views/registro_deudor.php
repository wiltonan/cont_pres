<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="formulariobono">
      <section>
        <center><h4>Registrar deudor</h4></center>
        <form action="../Controlador/registro.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input type="number" name="cedula" required/>
              <label class="active" for="first_name2">Cedula: </label>
            </div>

            <div class="input-field col s6">
              <input type="text" name="nombre" required/>
              <label class="active" for="first_name2">Nombre: </label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="apellido" required/>
              <label class="active" for="first_name2">Apellido: </label>
            </div>

            <div class="input-field col s6">
              <input type="number" name="telefono" required/>
              <label class="active" for="first_name2">Telefono: </label>
            </div>
          </div>
          <center><button name="action" value="guardardeudor" class="waves-effect waves-light btn">Registrar</button></center>
        </form>
      </section>
    </div>
  </body>
</html>
