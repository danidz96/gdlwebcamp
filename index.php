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
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fa fa-comments"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS 3 y JavaScript</h3>
                            <p><i class="fa fa-clock"></i>16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <hr>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fa fa-clock"></i>16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser Freelancer</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <hr>
                        <div class="detalle-evento">
                            <h3>Tecnologías de futuro</h3>
                            <p><i class="fa fa-clock"></i>12:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>10 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX</h3>
                            <p><i class="fa fa-clock"></i>17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <hr>
                        <div class="detalle-evento">
                            <h3>Aprende a programar</h3>
                            <p><i class="fa fa-clock"></i>10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i>11 de Dic</p>
                            <p><i class="fa fa-user"></i> Dani Dominguez</p>
                        </div>
                        <a href="#" class="button float-right">Ver todos</a>
                    </div>
                </div>
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
            <a href="#" class="button transparente">Registro</a>
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
