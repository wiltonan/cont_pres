<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/registro.php");

$accion=$_REQUEST['action'];
  switch ($accion) {

    case 'guardardeudor':

    $rol='usuario';
    $cedula=$_POST['cedula'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];

    try {
      Registro::guardar($cedula,$nombre,$apellido,$telefono);
      echo "<script>alert('Se ha registrado el usuario');
      self.location.href='../Views/menu_admin.php?#/Registrar_deudor';
      </script>";
      }
      catch (Exception $e) {
      echo 'No se guardo'.$e;
      }
        break;

      case 'guardarprestamo':
        $cedula=$_POST['usu'];
        $prestamo=$_POST['prestamo'];
        $fecha_prestamo=$_POST['fecha_prestamo'];
        $plazo_prestamo=$_POST['plazo_prestamo'];

        try {
          Registro::guardarprestamo($cedula,$prestamo,$fecha_prestamo,$plazo_prestamo);
          echo "<script>alert('Se ha registrado el prestamo');
          self.location.href='../Views/menu_admin.php?#/Prestar';
          </script>";
          }catch (Exception $e) {
            echo 'No se guardo'.$e;
          }
            break;
}
 ?>
