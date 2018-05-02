<?php

if (!isset($_POST['submit'])) {
  exit("Algo ha ido mal");
}

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'includes/paypal.php';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $regalo = $_POST['regalo'];
  $total = $_POST['total_pedido'];
  $fecha = date('Y-m-d H:i:s');
  //pedido
  $entradas = $_POST['entradas'];
  $numeroEntradas = $entradas;
  $pedidoExtra = $_POST['pedido_extra'];
  $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
  $precioCamisa = $_POST['pedido_extra']['camisas']['precio'];
  $etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];
  $precioEtiquetas = $_POST['pedido_extra']['etiquetas']['precio'];
  include_once 'includes/funciones/funciones.php';
  $pedido = productos_json($entradas, $camisas, $etiquetas);
  //eventos
  $eventos = $_POST['registro'];
  $registro = eventos_json($eventos);


try {
  require_once('includes/funciones/bd_conexion.php');
  $stmt = $db->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
  $stmt->execute();
  $ID_registro = $stmt->insert_id;
  $stmt->close();
  $db->close();
  //header('Location: validar_registro.php?exitoso=1');
} catch (Exception $e) {
  $error = $e->getMessage();
}
}

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();
$articulo->setName($producto)
         ->setCurrency('EUR')
         ->setQuantity(1)
         ->setPrice($precio);

$i = 0;
$array_pedido = array();
foreach ($numeroEntradas as $key => $value) {
  if ((int)$value['cantidad' > 0]) {

    ${"articulo$i"} = new Item();
    $array_pedido[] = ${"articulo$i"};
    ${"articulo$i"}->setName('Pase:' . $key)
                 ->setCurrency('EUR')
                 ->setQuantity((int) $value['cantidad'])
                 ->setPrice((int) $value['precio']);
    $i++;
  }
}

foreach ($pedidoExtra as $key => $value) {
  if ((int)$value['cantidad' > 0]) {
    if($key == 'camisas'){
      $precio = (float) $value['precio'] * .93;
    }else{
      $precio = (int) $value ['precio'];
    }
    ${"articulo$i"} = new Item();
    $array_pedido[] = ${"articulo$i"};
    ${"articulo$i"}->setName('Extras:' . $key)
                 ->setCurrency('EUR')
                 ->setQuantity((int) $value['cantidad'])
                 ->setPrice($precio);
    $i++;
  }
}



$listaArticulos = new ItemList();
$listaArticulos->setItems($array_pedido);

$cantidad = new Amount();
$cantidad->setCurrency('EUR')
         ->setTotal($total);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago GLDWEBCAMP')
            ->setInvoiceNumber($ID_registro);

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true&id_pago={$ID_registro}")
              ->setCancelUrl(URL_SITIO. "/pago_finalizado.php?exito=false&id_pago={$ID_registro}");

$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));

try {
  $pago->create($apiContext);
} catch (Paypal\Exception\PaypalConnectionException $pce) {
  echo "<pre>";
  print_r(json_decode($pce->getData()));
  exit;
  echo "</pre>";
}

$aprobado = $pago->getApprovalLink();

header("Location: {$aprobado}");



 ?>
