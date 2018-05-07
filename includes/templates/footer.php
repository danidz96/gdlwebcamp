<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre <span>GDLWebCamp</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie hendrerit arcu, eget venenatis quam convallis vitae. Ut feugiat tempus aliquet. Integer sit amet enim nisl. Fusce aliquet interdum cursus. Sed eget risus ligula. Praesent neque diam,
      faucibus eget ante non, malesuada rutrum leo.</p>
    </div>
    <div class="ultimos-tweets">
      <h3>últimos <span>tweets</h3>
        <ul>
          <li>Sed eget risus ligula. Praesent neque diam,
          faucibus eget ante non, malesuada rutrum leo.</li>
          <li>Sed eget risus ligula. Praesent neque diam,
          faucibus eget ante non, malesuada rutrum leo.</li>
          <li>Sed eget risus ligula. Praesent neque diam,
          faucibus eget ante non, malesuada rutrum leo.</li>
        </ul>
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

<?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
  if ($pagina == 'invitados' || $pagina == 'index') {
    echo '<script src="js/jquery.colorbox.js"></script>';
  }else if ($pagina == 'conferencia'){
    echo '<script src="js/lightbox.js"></script>';
  }
 ?>
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
</body>

</html>
