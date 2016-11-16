<?php
  include_once("../Modelo/conexion.php");
  include_once("../Modelo/mostrador.php");

  $documentos = Mostrar::Buscar_nombre($_POST["vlparam"]);
?>
<?php foreach ($documentos as $row): ?>
  <?php echo $row["nombre"] ?>
<?php endforeach; ?>
