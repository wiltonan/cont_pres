<?php
  class Registro{
    public static function guardar($cedula,$nombre,$apellido,$telefono){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO tbl_usuario(cedula, nombre, apellido, telefono) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cedula,$nombre,$apellido,$telefono));
    ConexionBD::DesconectarBD();
    }
  }
?>
