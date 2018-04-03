<?php include_once 'includes/templates/header.php' ?>


    <section class="seccion contenedor clearfix">
        <h2>Invitados</h2>

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM invitados";
          $resultado = $db->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

         ?>
          <section class="invitados contenedor seccion">
           <h2>Nuestros invitados</h2>
           <ul class="lista-invitados clearfix">
           <?php while($invitados = $resultado->fetch_assoc()) {?>
             <li>
               <div class="invitado">
                  <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado">
                  <p><?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?></p>
                </div>
              </li>
           <?php } ?>
          </ul>
          </section>
        </div>
         <?php
         $db->close();
         ?>

    </section>

      <?php include_once 'includes/templates/footer.php' ?>


</body>

</html>
