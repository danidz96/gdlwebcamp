<?php include_once 'includes/templates/header.php' ?>


    <section class="seccion contenedor clearfix">
        <h2>Calendario de eventos</h2>

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos
          INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.id_invitado ORDER BY id_evento";
          $resultado = $db->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

         ?>

          <div class="calendario">
            <?php
              $calendario = array();
              while( $eventos = $resultado->fetch_assoc() ){
                $evento = array(
                  'titulo'=> $eventos['nombre_evento'],
                  'fecha' => $eventos['fecha_evento'],
                  'hora' => $eventos['hora_evento'],
                  'categoria' => $eventos['cat_evento'],
                  'icono' => 'fa' . " " . $eventos['icono'],
                  'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']);

                $calendario[$eventos['fecha_evento']][] = $evento;
                ?>
            <?php } ?>
            <?php
            // Imprime todos los $eventos
            foreach ($calendario as $dia => $lista_eventos) { ?>
              <h3>
                <i class='fa fa-calendar'></i>
                <?php
                setlocale(LC_TIME, 'spanish');
                echo date("F j, Y", strtotime($dia)); ?>
              </h3>


              <?php foreach ($lista_eventos as $evento){ ?>
                <div class="dia">
                  <p class="titulo"><?php echo $evento['titulo']; ?></p>
                  <p class="hora"><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['fecha'] . " " . $evento['hora'];  ?></p>
                  <p>
                    <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                    <?php echo $evento['categoria']; ?>
                  </p>
                  <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['invitado'];?></p>

                </div>

              <?php } ?>
          <?php } ?>


        </div>
        <?php
        $db->close();
        ?>

    </section>

      <?php include_once 'includes/templates/footer.php' ?>


</body>

</html>
