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

  echo $password_hashed;

  try {
    include_once'funciones/funciones.php';
    $stmt = $db->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $nombre, $password_hashed);
    $stmt->execute();
    $stmt->close();
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage;
  }


}

// echo "<pre>";
//   var_dump($_POST);
// echo "</pre>";

 ?>
