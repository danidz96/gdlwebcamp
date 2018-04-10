<?php include_once 'includes/templates/header.php' ?>
    <!--barra-->
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempor augue dui, vitae tincidunt diam ullamcorper sit amet. Donec porttitor laoreet erat, eget bibendum quam consectetur quis. Aliquam erat elit, pharetra ut pharetra semper, molestie
            mollis dui. Fusce lacinia sapien a pharetra viverra. Nulla semper laoreet mauris. Nullam non fringilla urna. Ut tristique interdum felis. Aliquam nulla enim, convallis in enim in, lacinia rhoncus orci.</p>
    </section>
    <!--seccion-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.ogv" type="video/ogv">
          <source src="video/video.webm" type="video/webm">
        </video>
        </div>
        <!--.contenedor-video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>
                    <?php
                    try {
                      require_once('includes/funciones/bd_conexion.php');
                      $sql = "SELECT * FROM categoria_evento";

                      $resultado = $db->query($sql);
                    } catch (\Exception $e) {
                      echo $e->getMessage();
                    }
                    ?>
                    <nav class="menu-programa">
                      <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <?php $categoria = $cat['cat_evento']; ?>
                        <?php $icono_evento = $cat['icono']; ?>
                        <a href="#<?php echo strtolower($categoria) ?>"><i class="fa <?php echo $icono_evento ?>"></i><?php echo $categoria ?></a>
                      <?php } ?>
                    </nav>

                    <?php
                    try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos
                        INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria AND eventos.id_cat_evento = 1 INNER JOIN invitados ON eventos.id_inv = invitados.id_invitado ORDER BY id_evento LIMIT 2; ";
                        $sql .= "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos
                        INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria AND eventos.id_cat_evento = 2 INNER JOIN invitados ON eventos.id_inv = invitados.id_invitado ORDER BY id_evento LIMIT 2; ";
                        $sql .= "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos
                        INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria AND eventos.id_cat_evento = 3 INNER JOIN invitados ON eventos.id_inv = invitados.id_invitado ORDER BY id_evento LIMIT 2;";

                      } catch (\Exception $e) {
                        echo $e->getMessage();
                      }
                    ?>

                    <?php $db->multi_query($sql); ?>
                    <?php do {
                      $resultado = $db->store_result();
                      $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                      <?php $i = 0; ?>
                      <?php foreach ($row as $evento): ?>
                        <?php if ($i % 2 == 0){ ?>
                        <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                        <?php } ?>
                        <?php if ($i === 1) { ?>
                          <hr>
                        <?php } ?>
                            <div class="detalle-evento">
                                <h3><?php echo utf8_encode($evento['nombre_evento']); ?></h3>
                                <p><i class="fa fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                                <p><i class="fa fa-calendar"></i><?php echo $evento['fecha_evento']; ?></p>
                                <p><i class="fa fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
                            </div>

                        <?php if ($i % 2 == 1): ?>
                          <a href="calendario.php" class="button float-right">Ver todos</a>
                        </div>
                      <?php endif; ?>
                        <?php $i++; ?>

                      <?php endforeach; ?>
                      <?php $resultado->free(); ?>
                    <?php } while ($db->more_results() && $db->next_result()); ?>
            </div>
        </div>
    </section>
    <!--.programa-->

      <?php include_once 'includes/templates/invitados.php' ?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero">0</p>Invitados</li>
                <li>
                    <p class="numero">0</p>Talleres</li>
                <li>
                    <p class="numero">0</p>Días</li>
                <li>
                    <p class="numero">0</p>Conferencias</li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">30$</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los días</h3>
                        <p class="numero">50$</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">45$</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="map" class="map"></div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie hendrerit arcu, eget venenatis quam convallis vitae. Ut feugiat tempus aliquet. Integer sit amet enim nisl. Fusce aliquet interdum cursus. Sed eget risus ligula. Praesent neque diam,
                        faucibus eget ante non, malesuada rutrum leo.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="./img/testimonial.jpg" alt="testimonio">
                        <cite>Dani Dominguez Zamorano <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie hendrerit arcu, eget venenatis quam convallis vitae. Ut feugiat tempus aliquet. Integer sit amet enim nisl. Fusce aliquet interdum cursus. Sed eget risus ligula. Praesent neque diam,
                        faucibus eget ante non, malesuada rutrum leo.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="./img/testimonial.jpg" alt="testimonio">
                        <cite>Dani Dominguez Zamorano <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie hendrerit arcu, eget venenatis quam convallis vitae. Ut feugiat tempus aliquet. Integer sit amet enim nisl. Fusce aliquet interdum cursus. Sed eget risus ligula. Praesent neque diam,
                        faucibus eget ante non, malesuada rutrum leo.
                    </p>
                    <footer class="info-testimonial clearfix">
                        <img src="./img/testimonial.jpg" alt="testimonio">
                        <cite>Dani Dominguez Zamorano <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Regístrate al newsletter</p>
            <h3>GDLWEBCAMP</h3>
            <a href="#mc_embed_signup"  class="button transparente boton_newsletter">Registro</a>
        </div>
    </div>

    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li>
            <p id="dias" class="numero"></p>días</li>
          <li>
            <p id="horas" class="numero"></p>horas</li>
          <li>
            <p id="minutos" class="numero"></p>minutos</li>
          <li>
            <p id="segundos" class="numero"></p>segundos</li>
        </ul>
      </div>
    </section>

    <?php include_once 'includes/templates/footer.php' ?>
