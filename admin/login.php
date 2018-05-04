<?php
  session_start();
  if(isset($_GET['cerrar_sesion'])) {
  session_destroy();
  }
  include_once'funciones/funciones.php';
  include_once'templates/header.php';
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.php"><b>GDL</b>Webcamp</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <input type="hidden" name="login-admin" value="1">
          <button  type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

  <?php include_once'templates/footer.php'; ?>
