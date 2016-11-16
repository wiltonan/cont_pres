<?php
  class Mostrar{
    public static function Buscar_nombre($documento){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql="SELECT * FROM tbl_usuario WHERE cedula LIKE concat('%',?,'%')";

      $query= $pdo->prepare($sql);
      $query->execute(array($documento));

      $result= $query->fetchALL(PDO::FETCH_BOTH);

      ConexionBD::DesconectarBD();
      return $result;
    }
  }


 ?>
