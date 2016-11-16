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

        case 'modificar':
          $pto_cod=$_POST['pto_cod'];
          $bono_desc=ucfirst($_POST['bono_desc']);
          $bono_cod=$_POST['bono_cod'];

          try {
            bono::modificar($pto_cod,$bono_desc,$bono_cod);
            echo "<script>alert('Se ha modificado el bono');
            self.location.href='../Views/menu_admin.php?#/bono';
            </script>";
          }
          catch (Exception $e){
              echo 'Ocurrio un error'.$e ;
          }
          break;
}
 ?>
