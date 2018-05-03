<?php

/* Comprobar si esta conectado a la bbdd
if($db->ping()){
  echo "conectado";
}else {
  echo "0";
}*/

if (isset($_POST['agregar-admin'])) {

  $usuario = $_POST['usuario'];
  $nombre = $_POST['nombre'];
  $password = $_POST['password'];

  $opciones = array(
    'cost' => 12
  );

  $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones); //encriptación contraseña

  try {
    include_once'funciones/funciones.php';
    $stmt = $db->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $nombre, $password_hashed);
    $stmt->execute();
    $id_registro = $stmt->insert_id;
    if ($id_registro > 0) {
      $respuesta = array(
        'respuesta' => 'exito',
        'id_admin' => $id_registro
      );

    }else {
      $respuesta = array(
        'respuesta' => 'error'
      );
    }
    $stmt->close();
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage;
  }

      die(json_encode($respuesta));
}

if (isset($_POST['login-admin'])) {
  die(json_encode($_POST));
}
// echo "<pre>";
//   var_dump($_POST);
// echo "</pre>";

 ?>
