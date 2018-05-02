<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
    <h2>Resumen registro</h2>
    <?php
      $resultado = $_GET['exito'];


      if ($resultado == "true") {
        $paymentId = $_GET['paymentId'];
        $id_pago = $_GET['id_pago'];
        echo "El resultado se realizo correctamente </br>";
        echo "El ID es {$paymentId}";
      }else {
        echo "El pago no se realizó";
      }

    ?>
</section>
<?php include_once 'includes/templates/footer.php' ?>
