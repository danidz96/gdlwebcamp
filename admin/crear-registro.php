<?php
        include_once 'funciones/sesiones.php';
        include_once 'templates/header.php';
        include_once 'funciones/funciones.php';
        include_once 'templates/barra.php';
        include_once 'templates/aside.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Registro de Usuario Manual
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Usuario</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form  role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-registrado.php">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombre_registrado">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                          <label for="apellido">Apellido:</label>
                                          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                                    </div>
                                    <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <div id="paquetes" class="paquetes">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Elige el número de boletos</h3>
                                            </div>
                                          <ul class="lista-precios clearfix row">
                                              <li class="col-md-4">
                                                    <div class="tabla-precio text-center">
                                                        <h3>Pase por día (viernes)</h3>
                                                        <p class="numero">$30</p>
                                                        <ul>
                                                          <li>Bocadillos Gratis</li>
                                                          <li>Todas las conferencias</li>
                                                          <li>Todos los talleres</li>
                                                        </ul>
                                                        <div class="orden">
                                                            <label for="pase_dia">Boletos deseados:</label>
                                                            <input type="number" class="form-control" min="0" id="pase_dia" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
                                                            <input type="hidden" value="30" name="boletos[un_dia][precio]">
                                                        </div>
                                                    </div>
                                              </li>
                                              <li class="col-md-4">
                                                    <div class="tabla-precio text-center">
                                                        <h3>Todos los días</h3>
                                                        <p class="numero">$50</p>
                                                        <ul>
                                                          <li>Bocadillos Gratis</li>
                                                          <li>Todas las conferencias</li>
                                                          <li>Todos los talleres</li>
                                                        </ul>
                                                        <div class="orden">
                                                            <label for="pase_completo">Boletos deseados:</label>
                                                            <input type="number" class="form-control" min="0" id="pase_completo" size="3" name="boletos[completo][cantidad]" placeholder="0">
                                                            <input type="hidden" value="50" name="boletos[completo][precio]">
                                                        </div>
                                                    </div>
                                              </li>

                                              <li class="col-md-4">
                                                    <div class="tabla-precio text-center">
                                                        <h3>Pase por 2 días (viernes y sábado)</h3>
                                                        <p class="numero">$45</p>
                                                        <ul>
                                                          <li>Bocadillos Gratis</li>
                                                          <li>Todas las conferencias</li>
                                                          <li>Todos los talleres</li>
                                                        </ul>
                                                        <div class="orden">
                                                            <label for="pase_dosdias">Boletos deseados:</label>
                                                            <input type="number" class="form-control" min="0" id="pase_dosdias" size="3" name="boletos[2dias][cantidad]" placeholder="0">
                                                            <input type="hidden" value="45" name="boletos[2dias][precio]">
                                                        </div>
                                                    </div>
                                              </li>
                                          </ul>
                                        </div><!--#paquetes-->
                                    </div> <!--.form-group-->

                                    <div class="form-group">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Elige los talleres</h3>
                                        </div>
                                        <div id="eventos" class="eventos clearfix">
                                                 <div class="caja ">
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
                                                   </div><!--.caja-->
                                             </div> <!--#eventos-->

                                             <div id="resumen" class="resumen ">
                                                 <div class="box-header with-border">
                                                     <h3 class="box-title">Pagos y Extras</h3>
                                                 </div>
                                                 <br>
                                                <div class="caja clearfix row">
                                                      <div class="extras col-md-6">
                                                            <div class="orden">
                                                                <label for="camisa_evento">Camisa del evento $10 <small>(promocion 7% dto.)</small></label>
                                                                <input type="number" class="form-control" min="0" id="camisa_evento" name="pedido_extra[camisas][cantidad]" size="3" placeholder="0">
                                                                <input type="hidden" value="10" name="pedido_extra[camisas][precio]">
                                                            </div> <!--.orden-->
                                                            <div class="orden">
                                                                <label for="etiquetas">Paquete de 10 etiquetas $2 <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
                                                                <input type="number" class="form-control" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]" size="3" placeholder="0">
                                                                <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]">
                                                            </div> <!--.orden-->
                                                            <div class="orden">
                                                                <label for="regalo">Seleccione un regalo</label> <br>
                                                                <select id="regalo" name="regalo" required class="form-control seleccionar">
                                                                    <option value="">- Seleccione un regalo --</option>
                                                                    <option value="2">Etiquetas</option>
                                                                    <option value="1">Pulsera</option>
                                                                    <option value="3">Plumas</option>
                                                                </select>
                                                            </div><!--.orden-->
                                                            <br>
                                                            <input type="button" id="calcular" class="btn btn-success" value="Calcular">
                                                      </div> <!--.extras-->

                                                      <div class="total col-md-6">
                                                          <p>Resumen:</p>
                                                          <div id="lista-productos">

                                                          </div>
                                                          <p>Total:</p>
                                                          <div id="suma-total">

                                                          </div>
                                                          <input type="hidden" name="total_pedido" id="total_pedido">
                                                          <input type="hidden" name="total_descuento" id="total_descuento" value="total_descuento">
                                                      </div> <!--.total-->
                                                </div><!--.caja-->
                                             </div> <!--#resumen-->
                                    </div>

                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="nuevo">
                                  <button type="submit" class="btn btn-primary" id="btnRegistro">Añadir</button>
                              </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.content -->

                </div>
        </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
          include_once 'templates/footer.php';
  ?>
