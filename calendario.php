<?php include_once 'includes/templates/header.php' ?>


    <section class="seccion contenedor clearfix">
        <h2>Calendario de eventos</h2>

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado FROM eventos
          INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.id_invitado ORDER BY id_evento";
          $resultado = $db->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

         ?>

        <div class="calendario">
          <?php
            while( $eventos = $resultado->fetch_assoc() ){ ?>
              <pre>
                <?php var_dump($eventos); ?>
              </pre>


            <?php } ?>


        </div>
        <?php
        $db->close();
        ?>

    </section>

      <?php include_once 'includes/templates/footer.php' ?>


</body>

</html>
