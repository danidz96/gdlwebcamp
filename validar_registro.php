<?php include_once 'includes/templates/header.php' ?>
<section class="seccion contenedor">
    <h2>Resumen registro</h2>
    <?php if (isset($_POST['submit'])) {
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $regalo = $_POST['regalo'];
      $total = $_POST['total_pedido'];
      $fecha = date('Y-m-d H:i:s');

      //Pedidos

      $entradas = $_POST['entradas'];
      $camisas = $_POST['camisa_evento'];
      $etiquetas = $_POST['etiquetas'];

      include_once 'includes/funciones/funciones.php';
      $pedido = productos_json($entradas, $camisas, $etiquetas);

      //eventos
      $eventos = $_POST['registro'];
      $registro = eventos_json($eventos);


      ?>
    <?php } ?>
    <pre>

      <?php var_dump($pedido); ?>

    </pre>
    <pre>
      <?php var_dump($registro); ?>
    </pre>
</section>
<?php include_once 'includes/templates/footer.php' ?>
