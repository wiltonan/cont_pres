<?php
  class Registro{
    // registrar usuario
    public static function guardar($cedula,$nombre,$apellido,$telefono){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO tbl_usuario(cedula, nombre, apellido, telefono) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cedula,$nombre,$apellido,$telefono));
    ConexionBD::DesconectarBD();
    }

    // registrar prestamos
    public static function guardarprestamo($cedula,$prestamo,$fecha_prestamo,$plazo_prestamo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql1="SELECT usu from tbl_usuario WHERE cedula = ?";
				$query=$pdo->prepare($sql1);
				$query->execute(array($cedula));
				$result1= $query->fetch(PDO::FETCH_BOTH);
				$codigo=$result1[0];

    $sql="INSERT INTO tbl_prestamo(usu, total, fecha_prestamo, plazo_prestamo) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo,$prestamo,$fecha_prestamo,$plazo_prestamo));
    ConexionBD::DesconectarBD();
    }
  }
?>
