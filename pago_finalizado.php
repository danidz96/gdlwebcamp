<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
    <h2>Resumen registro</h2>
    <?php
      $resultado = $_GET['exito'];


      if ($resultado == "true") {
        $paymentId = $_GET['paymentId'];
        $id_pago = (int)$_GET['id_pago'];
        echo "El resultado se realizo correctamente </br>";
        echo "El ID es {$paymentId}";

        require_once('includes/funciones/bd_conexion.php');
        $stmt = $db->prepare("UPDATE registrados SET pagado = ? WHERE id_registrado = ? ");
        $pagado = 1;
        $stmt->bind_param("ii", $pagado, $id_pago);
        $stmt->execute();
        $stmt->close();
        $db->close();
      }else {
        echo "El pago no se realizó";
      }

    ?>
</section>
<?php include_once 'includes/templates/footer.php' ?>
