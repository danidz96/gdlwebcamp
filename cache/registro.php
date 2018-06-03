<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link <link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans|Oswald|PT+Sans|Roboto" rel="stylesheet">

    
    <link rel="stylesheet" href="css/main.css">



</head>

<body class="registro">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="informacion-evento">
                        <div class="clearfix">
                        <p class="fecha"><i class="far fa-calendar-alt"></i>10-12 Dic</p>
                        <p class="Ciudad"><i class="fas fa-map-marker-alt"></i>Barcelona</p>
                    </div>
                    <h1 class="nombre-sitio">GDLWebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>
                </div>
                <!-- .informacion-evento -->
            </div>
            <!-- .contenido-header -->
        </div>
        <!-- .hero -->
    </header>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
              <a href="index.php">
                <img src="img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="menu-movil ">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal  clearfix">
                <a href="conferencia.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reserva</a>
            </nav>
        </div>
    </div>

    <section class="seccion contenedor">
        <h2>Registro de usuarios</h2>
        <form  id="registro" class="registro" action="pagar.php" method="post">
            <div id="datos-usuarios" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">

                </div>
                <div class="campo">
                    <label for="nombre">Apellido: </label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
                </div>
                <div class="campo">
                    <label for="nombre">Email: </label>
                    <input type="text" id="email" name="email" placeholder="Tu email">
                </div>
                <div id="error"></div>
            </div>
            <!-- #datos_usuario-->
            <div id="paquetes" class="paquetes">
                <h3>Elige el número de entradas</h3>
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por día (Viernes)</h3>
                            <p class="numero">30$</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dia">Número de entradas</label>
                                <input type="number" min="0" id="pase_dia"  size="3" name="entradas[un_dia][cantidad]" placeholder="0">
                                <input type="hidden" name="entradas[un_dia][precio]" value="30">
                            </div>
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
                            <div class="orden">
                                <label for="pase_completo">Número de entradas</label>
                                <input type="number" min="0" id="pase_completo" size="3" name="entradas[completo][cantidad]" placeholder="0">
                                <input type="hidden" name="entradas[completo][precio]" value="50">
                            </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por 2 días (viernes y sábado)</h3>
                            <p class="numero">45$</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dosdias">Número de entradas</label>
                                <input type="number" min="0" id="pase_dosdias" size="3" name="entradas[dos_dias][cantidad]" placeholder="0">
                                <input type="hidden" name="entradas[dos_dias][precio]" value="45">
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- paquetes-->
                <div id="eventos" class="eventos clearfix">
                    <h3>Elige tus talleres</h3>
                    <div class="caja">
                      
                        <div id="viernes" class="contenido-dia clearfix">
                            <h4>Viernes</h4>
                            <div>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                            </div>
                            <div>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                            </div>
                            <div>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                            </div>
                        </div>
                        <!--#viernes-->
                        <div id="sabado" class="contenido-dia clearfix">
                            <h4>Sábado</h4>
                            <div>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                            </div>
                            <div>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                            </div>
                            <div>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                            </div>
                        </div>
                        <!--#sabado-->
                        <div id="domingo" class="contenido-dia clearfix">
                            <h4>Domingo</h4>
                            <div>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                            </div>
                            <div>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                            </div>
                            <div>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                            </div>
                        </div>
                    </div>
                    <!--.caja-->
                </div>
                <!--#eventos-->

                <div id="resumen" class="resumen">
                    <h3>Pago y extras</h3>
                    <div class="caja clearfix">
                        <div class="extras">
                            <div class="orden">
                                <label for="camisa_evento">Camisa del evento $10 <small>(promoción 7% dto.)</small></label> <br>
                                <input type="number" name="pedido_extra[camisas][cantidad]" id="camisa_evento" size="3" min="0" placeholder="0">
                                <input type="hidden" name="pedido_extra[camisas][precio]" value="10">
                            </div>
                            <div class="orden">
                                <label for="etiquetas">Paquetes de 10 etiquetas $2(HTML5, CSS3, JavaScript)</label> <br>
                                <input type="number" name="pedido_extra[etiquetas][cantidad]" id="etiquetas" size="3" min="0" placeholder="0">
                                <input type="hidden" name="pedido_extra[etiquetas][precio]" value="2">
                            </div>
                            <div class="orden">
                                <label for="regalo">Seleccione un regalo</label> <br> <br>
                                <select id="regalo" name="regalo" required>
                                <option value="">Seleccione un regalo</option>
                                <option value="2">Etiquetas</option>
                                <option value="1">Pulsera</option>
                                <option value="3">Pluma</option>
                              </select>
                            </div>

                            <input type="button" id="calcular" class="button" value="Calcular">
                        </div>
                        <div class="total">
                          <p>Resumen:</p>
                          <div id="lista-productos">

                          </div>
                          <p>Total:</p>
                          <div id="suma-total">

                          </div>
                          <input type="hidden" name="total_pedido" id="total_pedido">
                          <input type="submit" name="submit" id="btnRegistro" class="button" value="Pagar">
                        </div>
                    </div>
                </div>
        </form>
    </section>

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <img src="img/logo.svg" alt="logo">
            </div>
            <div class="menu-movil ">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal  clearfix">
                <a href="#">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitados</a>
                <a href="registro.html">Reserva</a>
            </nav>
        </div>
    </div>
    <!--barra-->


      <footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre <span>GDLWebCamp</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie hendrerit arcu, eget venenatis quam convallis vitae. Ut feugiat tempus aliquet. Integer sit amet enim nisl. Fusce aliquet interdum cursus. Sed eget risus ligula. Praesent neque diam,
      faucibus eget ante non, malesuada rutrum leo.</p>
    </div>
    <div class="ultimos-tweets">
      <h3>últimos <span>tweets</h3>
        <a class="twitter-timeline" data-height="400" data-theme="light" data-link-color="#fe4918" href="https://twitter.com/dani170596?ref_src=twsrc%5Etfw">Tweets by dani170596</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="menu">
      <h3>Redes <span>sociales</h3>
      <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></a>
          <a href="#"><i class="fab fa-pinterest-square"></i></a>
          <a href="#"><i class="fab fa-youtube-square"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">
    Todos los derecho reservados a GDLWEBCAMP 2018.
  </p>
  <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display:none;">
  <div id="mc_embed_signup">
  <form action="https://twitter.us18.list-manage.com/subscribe/post?u=9d44824280f79b87b28450f59&amp;id=4ca6aa2a77" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  	<h2>Suscríbete a nuestro Newsletter</h2>
  <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
  <div class="mc-field-group">
  	<label for="mce-EMAIL">Correo electrónico  <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>
  <div class="mc-field-group">
  	<label for="mce-FNAME">Nombre </label>
  	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>
  <div class="mc-field-group">
  	<label for="mce-LNAME">Apellidos </label>
  	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
  </div>
  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9d44824280f79b87b28450f59_4ca6aa2a77" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>
</div>
<!--End mc_embed_signup-->
</footer>

<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.waypoints.min.js"></script>

<script src="js/main.js"></script>
<script src="js/cotizador.js"></script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS6-FiwivqOyOVi-XP5JpYs1ZHVTaglsg&callback=initMap">
    </script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"9d44824280f79b87b28450f59","lid":"4ca6aa2a77"}) })</script>
