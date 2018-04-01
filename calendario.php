<?php include_once 'includes/templates/header.php' ?>


    <section class="seccion contenedor clearfix">
        <h2>Calendario de eventos</h2>

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM eventos";
          $resultado = $db->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

         ?>

        <div class="calendario">
          <?php
            $eventos = $resultado->fetch_assoc();
           ?>
           <pre>
             <?php var_dump($eventos); ?>
           </pre>
        </div>
        <?php
        $db->close();
        ?>

    </section>

      <?php include_once 'includes/templates/footer.php' ?>


    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/main.js"></script>




    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
