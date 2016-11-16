<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>menu administrador.</title>
    <script rel="stylesheet" src="js/jquery-1.12.4.min.js"></script>
    <!-- <script rel="stylesheet" src="materialize/js/materialize.js"></script> -->
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="Stilos/menu_admin.css">
    <script rel="stylesheet" src="js/admin.js"></script>
    <script rel="stylesheet" src="materialize/js/materialize.js"></script>
  </head>
  <body>
    <div class="superior">
      <div class="session" onclick="destroy()">
        <a href="#">Cerrar sesion</a>
      </div>
    </div>
    <header>
      <div class="nav-wrapper">
        <nav>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li id="inicio1" onclick="inicio1()"><a href="#/Inicio">Inicio</a></li>
            <li id="registrar"><a href="#/Registrar_deudor">Registrar deudor</a></li>
            <li id="abonar"><a href="#/Abonar">Abonar</a></li>
            <li id="prestar"><a href="#/Prestar">Prestar</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="inicio">
      <?php include 'inicio_admin.php' ?>
    </section>
    <section class="opciones"></section>
  </body>
</html>
